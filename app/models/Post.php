<?php
class Post extends Eloquent {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array('title', 'slug', 'content','image', 'active', 'publish_date', 'user_id');
	/**
	 * Tags Relationship
	 *
	 * @return Relationship
	 */
	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
	/**
	 * User relationship
	 *
	 * @return Relationship
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
/**
	 * Get all of the posts.
	 *
	 * @return array
	 */
	public function scopeAll($query)
	{
		return $query->with(array('tags', 'user'))->orderBy('publish_date', 'desc')->get();
	}

	/**
	 * Get all of the active posts.
	 *
	 * @param int $per_page
	 *
	 * @return array
	 */
	public function scopeActive($query,$per_page)
	{
		$per_page = is_numeric($per_page) ? $per_page : 5;

		return $query->with(array('tags', 'user'))
			->where('active', 1)
			->where('publish_date', '<=', new DateTime)
			->orderBy('publish_date', 'desc')
			->paginate($per_page);
	}

	/**
	 * Get a Post by its primary key.
	 *
	 * @param  int   $id
	 * @return Post
	 */
	public function scopeFind($query,$id)
	{
		return $query->with(array('tags', 'user'))->findOrFail($id);
	}

	/**
	 * Get a Post by its slug
	 *
	 * @param  string 	$slug
	 * @return Post
	 */
	public function scopeFindBySlug($query,$slug)
	{
		return $query->with(array('tags', 'user'))
			->where('active', 1)
			->where('publish_date', '<=', new DateTime)
			->where('slug', $slug)->first();
	}

	/**
	 * Get all posts with a tag
	 *
	 * @param  string   $tag
	 * @param  int      $per_page
	 * @return array
	 */
	public function scopeActiveByTag($query,$tag, $per_page)
	{
		$per_page = is_numeric($per_page) ? $per_page : 5;

		return $query->with(array('tags', 'user'))
			->select('posts.*')
			->join('tags', 'posts.id', '=', 'tags.post_id')
			->where('tags.tag', '=', $tag)
			->orderBy('posts.publish_date', 'desc')
			->where('posts.active', 1)
			->where('posts.publish_date', '<=', new DateTime)
			->distinct()
			->paginate($per_page);
	}

	/**
	 * Search all active posts
	 *
	 * @param  string   $tag
	 * @param  int      $per_page
	 * @return array
	 */
	public function scopeSearch($query,$search, $per_page)
	{
		$per_page = is_numeric($per_page) ? $per_page : 5;

		return $query->with(array('tags', 'user'))
			->select('posts.*')
			->where(function($query) use ($search)
			{
				$query->orWhere('title', 'like', '%'.$search.'%')
							->orWhere('content', 'like', '%'.$search.'%');
			})
			->orderBy('posts.publish_date', 'desc')
			->where('posts.active', '=', 1)
			->where('posts.publish_date', '<=', new DateTime)
			->groupBy('id')
			->distinct()
			->paginate($per_page);
	}

	/**
	 * Search from the huguka facet
	 *
	 * @param  array   $params
	 * @return array
	 */
	public function scopeFacadeSearch($query,array $params)
	{
		$search = isset($params['q']) ? $params['q'] : null;
		$tag = isset($params['tag']) ? $params['tag'] : null;
		$limit = isset($params['limit']) ? (int) $params['limit'] : 1;

		$post = $query->with(array('tags', 'user'))
			->select('posts.*')
			->orderBy('posts.publish_date', 'desc')
			->where('posts.active', 1)
			->where('posts.publish_date', '<=', new DateTime)
			->distinct();

		if ($search)
		{
			$post->where(function($query) use ($search)
			{
				$query->orWhere('title', 'like', '%'.$search.'%')
							->orWhere('content', 'like', '%'.$search.'%');
			});
		}

		if ($tag)
		{
			$post->where('tags.tag', '=', $tag);
		}

		return $post->skip(0)->take($limit)->get();
	}

	/**
	 * Create a new post.
	 *
	 * @param  string  $title
	 * @param  string  $content
	 * @param  string  $slug
	 * @param  array  $tags
	 * @param  bool  $active
	 * @param  int  $user_id
	 * @param  DateTime  $publish_date
	 * @return Post
	 */
	public function scopeCreate($query,$title, $content, $slug, array $tags, $active, $user_id, DateTime $publish_date)
	{
		$post = $query->create(compact('title', 'content', 'slug', 'active', 'user_id', 'publish_date'));

		$post->tags()->delete();

		$post->tags()->createMany($this->prepareTags($tags));

		return $post;
	}

	/**
	 * Update a post's title and content.
	 *
	 * @param  int      $id
	 * @param  string   $title
	 * @param  string   $content
	 * @param  string   $slug
	 * @param  array    $tags
	 * @param  string   $active
	 * @param  int      $user_id
	 * @param \DateTime $publish_date
	 *
	 * @return Post
	 */
	public function scopeUpdate($query,$id, $title, $content, $slug, array $tags, $active, $user_id, DateTime $publish_date)
	{
		$post = $this->find($id);

		// Forget the old cache
		if (Config::get('huguka.cache'))
		{
			Cache::forget('post-'.$post->id);
		}

		$post->fill(compact('title', 'content', 'slug', 'active', 'user_id', 'publish_date'))->save();

		$post->tags()->delete();

		$post->tags()->createMany($this->prepareTags($tags));

		return $post;
	}

	/**
	 * Prepare an array of tags for database storage.
	 *
	 * @param  array  $tags
	 * @return array
	 */
	protected function scopePrepareTags($query,array $tags)
	{
		$results = array();

		foreach ($tags as $tag)
		{
			$results[] = compact('tag');
		}

		return $results;
	}

	/**
	 * Delete the post with the given ID.
	 *
	 * @param  int  $id
	 * @return void
	 */
	public function scopeDelete($query,$id)
	{
		$query->where('id', $id)->delete();
	}

	/**
	 * Get a list of all of the tags used by the blog.
	 *
	 * @return array
	 */
	public function allTags()
	{
		return Tag::orderBy('tag', 'asc')->groupBy('tag')->distinct()->get(array('tag'))->toArray();
	}

	/**
	 * Determine if the given post is valid for creation.
	 *
	 * @param  string  $title
	 * @param  string  $slug
	 * @return \Illuminate\Support\MessageBag
	 */
	public function validForCreation($title, $slug)
	{
		return $this->validatePost($title, $slug);
	}

	/**
	 * Determine if a given post is valid for updating.
	 *
	 * @param  string  $title
	 * @param  string  $slug
	 * @param  int  $id
	 * @return \Illuminate\Support\MessageBag
	 */
	public function validForUpdate($id, $title, $slug)
	{
		return $this->validatePost($title, $slug, $id);
	}

	/**
	 * Determine if the given post is valid.
	 *
	 * @param  string  $title
	 * @param  string  $slug
	 * @param  int  $id
	 * @return \Illuminate\Support\MessageBag
	 */
	protected function validatePost($title, $slug, $id = null)
	{
		$rules = array(
			'title' => 'required',
			'slug'  => 'required|unique:posts,slug',
		);

		if ($id)
		{
			$rules['slug'] .= ','.$id;
		}

		with($validator = Validator::make(compact('title', 'slug'), $rules))->fails();

		return $validator->errors();
	}
}