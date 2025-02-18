<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="./index.css" rel="stylesheet" /> 
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <!-- LOGO -->
        <a href="#" class="logo-container">
            <i class='bx bxs-coffee-bean'></i>
            <div class="logo-name">AMS</div>
        </a>
        <!-- LIST -->
        <ul class="sidebar-list">
            <li>
                <div class="title">
                        <a href="#" class="link">
                            <i class='bx bx-cheese'></i> 
                            <span class="name">Dashboard</span>
                        </a> 
                    </div> 
                    <div class="sub-menu">
                        <a href="#" class="link submenu-title">Dashboard</a> 
                    </div>
            </li> 
            <!-- submenu link -->
            <li class="dropdown">
                <div class="title">
                        <a href="#" class="link">
                            <i class='bx bx-cheese'></i> 
                            <span class="name">Dashboard</span> 
                        </a>  
                        <i class='bx bx-chevron-down' tabindex="0"></i>
                    </div> 
                    <div class="sub-menu">
                        <a href="#" class="link submenu-title">Dashboard</a>
                        <a href="#" class="link">Dashboard</a>
                        <a href="#" class="link">Dashboard</a>
                    </div>
            </li> 

            <li class="dropdown">
                <div class="title">
                        <a href="#" class="link">
                            <i class='bx bx-cheese'></i> 
                            <span class="name">Dashboard</span> 
                        </a>  
                        <i class='bx bx-chevron-down' tabindex="0"></i>
                    </div> 
                    <div class="sub-menu">
                        <a href="#" class="link submenu-title">Dashboard</a>
                        <a href="#" class="link">Dashboard</a>
                        <a href="#" class="link">Dashboard</a>
                    </div>
            </li>
        </ul>
    </div>   
    <section class="home"> 
        <div class="toggle-sidebar">
              <i class='bx bx-menu' ></i> 
              <div class="text">Toggle</div>
        </div> 
        <div class="container"> </div>
    </section>
    <script src="./index.js"></script>
</body>

</html>