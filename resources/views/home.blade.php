<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/a.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div style="display: flex">
        <div class="nav">
        <ul class="tabs">
            <li><a class="ins" href="{{route('home')}}">Instagram</a></li>
            <li style="padding-top:50px"><a href="{{route('home')}}"><i class="fa-solid fa-house" style="color: #ffffff;"></i> Home</a></li>
            <li><a><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> Search</a></li>
            <li><a><i class="fa-regular fa-compass" style="color: #ffffff;"></i> Explore</a></li>
            <li><a>Reels</a></li>
            <li><a>Messages</a></li>
            <li><a>Notifications</a></li>
            <li><a>Create</a></li>
            <li><a href="{{route('profile')}}">Profile</a></li>
            <li style="padding-top:200px"><a>Threads</a></li>
            <li><a>More</a></li> 
        </ul>
        </div>
        <div class="content"  >
            <img src="{{asset('storage/uploads/1.jpg')}}" alt=""> 
            <img src="{{asset('storage/uploads/1.jpg')}}" alt="">
            <img src="{{asset('storage/uploads/1.jpg')}}" alt="">
            <img src="{{asset('storage/uploads/1.jpg')}}" alt="">
            <img src="{{asset('storage/uploads/1.jpg')}}" alt="">


        </div>
    </div>
    
</body>
</html>