<div   style="background-color:#e5e5e5;padding-bottom:30%">
    <div style="background-color: #113049">
        <img src="ProfileImages/captain.jpg" style=" border-radius:30%;padding: 20px; width: 100%; height: 50%;">

    </div>


    <ul style="list-style:none">
        <br>
        <li>{{auth()->user()->name}}</li>
        <hr>
        <li>{{auth()->user()->email}}</li>
        <hr>
        <li><a href="#">Help</a></li>
    </ul>

</div>
