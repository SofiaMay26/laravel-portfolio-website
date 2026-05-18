<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
</head>
<body>

    <h1>Contact Messages</h1>

    @foreach($messages as $msg)
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <h3>{{ $msg->name }}</h3>
            <p>{{ $msg->email }}</p>
            <p>{{ $msg->message }}</p>
            <small>{{ $msg->created_at }}</small>
        </div>
    @endforeach

</body>
</html>