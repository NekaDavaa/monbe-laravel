@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<!-- File Upload Form -->
<form action="{{ route('course.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload File</button>
</form>

<!-- List of Files for Download -->
@foreach ($files as $file)
    <div>
        {{ $file->file_name }}
        <a href="{{ Storage::url('uploads/'.$file->file_name) }}" download>Download</a>
    </div>
@endforeach
