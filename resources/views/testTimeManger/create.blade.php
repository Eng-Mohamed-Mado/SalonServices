<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>حجز موعد جديد</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('test.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="visit_date">تاريخ الزيارة:</label>
            <input type="date" name="visit_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="start_time">وقت الحضور:</label>
            <input type="time" name="start_time" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">حجز الموعد</button>
    </form>

    <a href="{{ route('test.index') }}" class="btn btn-secondary">عرض الحجوزات</a>
</body>

</html>
