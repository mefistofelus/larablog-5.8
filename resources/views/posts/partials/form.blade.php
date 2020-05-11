<div class="form-group">
    <input name="title" type="text" class="form-control" value="{{ old('title') ?? $post->title ?? '' }}" required>
</div>
<div class="form-group">
    <textarea name="description" class="form-control" required rows="10">{{ old('description') ?? $post->description ??
     '' }}</textarea>
</div>
<div class="form-group">
    <input name="img" type="file">
</div>
