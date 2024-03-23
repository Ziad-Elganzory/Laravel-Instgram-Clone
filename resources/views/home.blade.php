@extends('layouts.homelayout')

@section('title','home')
    
@section('main')
            <div class="left-col">
                <div class="status-wrapper">
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_1</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_2</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_3</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_4</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_5</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_6</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_7</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_8</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_8</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_8</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_8</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                        <p class="username">user_name_8</p>
                    </div>
                </div>
                {{-- Posts --}}
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic"><img src="{{asset('ziad.jpg')}}" alt=""></div>
                            <p class="username">ganzury._</p>
                            <p class="post-time">.1h</p>
                        </div>
                        <i class="material-icons-outlined">more_horiz</i>
                    </div>
                    <img src="{{asset('ziad.jpg')}}" class="post-image" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <div class="reactions">
                                <i class="material-icons-outlined">favorite_border</i>
                                <i class="material-icons-outlined">chat_bubble_outline</i>                            
                                <i class="material-icons-outlined">send</i>   
                            </div>
                            <div class="bookmark-save">
                                <i class="material-icons-outlined">bookmark_border</i> 
                            </div>
                        </div>
                        <p class="likes">1,012 likes</p>
                        <p class="description"><span>ganzury._ </span> this is a placeholder caption text!</p>
                        
                        <a href=""><p class="view-comments">View All Comments</p></a>
                    </div>
                    <div class="comment-wrapper">
                        <input type="text" class="comment-box" placeholder="Add a comment">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
            </div>
@endsection