

<style>
    #sidebar-menu > ul > li > a {
    
    display: block;
    padding: 10px 25px;
    margin: 3px 0;
    background-color: #ffffff;

    font-family: 'Work Sans';
    line-height: 23px;
font-style: normal;
font-weight: 600;
font-size: 14px;



color: #373392;
}


.logo-large {
    height: 4rem;
}
</style>










<div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
                        <a href="{{ route('adminHome') }}" class="logo">
                            <img src="assets/images/1.png" alt="" class="logo-large">
                        </a>
                    </div>
                </div>

                <div class="sidebar-inner niceScrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title"></li>

                            <li>
                                <a href="{{ route('adminHome') }}" class="waves-effect">
                                <img src="assets/images/Document FL.svg" alt="">
                                    <span> Home <span class="float-right"><i class="mdi mdi-chevron-right"></i></span>
                                </a>
                            </li>

                            <li >
                                <a href="{{ route('adminPower') }}" class="waves-effect"><img src="assets/images/power.svg" alt=""> <span> Power Management </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li>

                            
                            

                            <li >
                                <a href="{{ route('adminVisit') }}" class="waves-effect"><img src="assets/images/visitors.svg" alt=""> <span> Visitors Center </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li>

                            

                            <li >
                                <a href="{{ route('estateManager') }}" class="waves-effect"><img src="assets/images/spacebook.svg" alt=""> <span> Estate Managers </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li>

                            <li >
                                <a href="{{route('adminTransact')}}" class="waves-effect"><img src="assets/images/transact-history.svg" alt=""><span> Transaction History </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li>

                            

                            


                            <br><br>

                            <br>

                            <li >
                                <a href="{{route('adminLogin')}}" class="waves-effect"><img src="assets/images/signout.svg" alt=""><span> Sign Out </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
