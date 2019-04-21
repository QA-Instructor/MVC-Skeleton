<div class="container" id="home-page-top-container"> <!--page heading-->
    <div class="row">
        <div class="col-10">
            <h1>Discover amazing things to do in London...</h1>
        </div>
        <div class="col-xs-1"></div>
    </div>
</div>

<div class="container" id="search-bar-container"> <!-- search bar-->
    <form action="" method="POST" enctype="multipart/form-data">   
        <div class="form-row">
            <div class="col-10">
                <input class="w3-input search-box" type="text" name="title" placeholder="search here..." required autofocus>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>   
</div> 

<div class="container" id="cards-container"> <!--cards container -->
    <div class="row">
        <div class="col">
            <h3>Top stories this week:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href='?controller=product&action=read&id=2'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..\MVC-Skeleton\views\images\posts\Greenwich.jpg" alt="Photo of Greenwich ship">
                <div class="card-body">
                    <p class="card-text">Greenwich</p>
                </div>
            </div></a>
        </div>
        <div class="col-md-3">
             <a href='?controller=product&action=read&id=3'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..\MVC-Skeleton\views\images\posts\ThePostalMuseum.jpg" alt="Photo of the Postal Museum">
                <div class="card-body">
                    <p class="card-text">The Postal Museum</p>
                </div>
            </div>
             </a>
        </div>
        <div class="col-md-3">
             <a href='?controller=product&action=read&id=1'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..\MVC-Skeleton\views\images\posts\TheO2.jpg" alt="Photo of the O2">
                <div class="card-body">
                    <p class="card-text">Up at the O2</p>
                </div>
            </div>
             </a>
        </div>
        <div class="col-md-3 align-self-end">
       <button type="submit" class="btn btn-primary" id="homepage-view-btn">View all</button>     
        </div>
    </div>
</div> <!-- top picks -->