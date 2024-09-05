<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">اختر صورة:</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">رفع الصورة</button>
    </form>


    @if (session('success'))
        <div>{{ session('success') }}</div>
        <img src="{{ asset('storage/' . session('image')) }}" alt="الصورة المرفوعة">
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>

</html>
