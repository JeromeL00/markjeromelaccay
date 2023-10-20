<?php wp_head() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerome Porfolio</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
    <header class="header bg-dark p-5 fixed w-[100%] z-[10]">
    
        <div class="container">
            <div class="header__wrapper flex justify-between items-center">
                <h2 class=" text-white text-3xl font-bold font-inder">J<span class="text-primary">E.</span></h2>
                <nav class="nav text-white font-medium hidden md:block">
                    <ul class="flex gap-7">
                        <li class="links md:hover:text-primary transition-all"><a href="#home">Home</a></li>
                        <li class="links md:hover:text-primary transition-all"><a href="#aboutme">About</a></li>
                        <li class="links md:hover:text-primary transition-all"><a href="#portfolio">Portfolio</a></li>
                        <li class="links md:hover:text-primary transition-all"><a href="#contact">Contact</a></li>
                    </ul>     
                </nav>
                <div class="toggle__menu block md:hidden">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
            </div>
            <div class="mobileNav md:hidden">
                <ul class="text-white text-center text-[1.3rem]">
                    <li class="py-2 hover:bg-gray transition-all "><a class="p-3" href="#home">Home</a></li>
                    <li class="py-2 hover:bg-gray transition-all "><a class="p-3" href="#aboutme">About</a></li>
                    <li class="py-2 hover:bg-gray transition-all"><a class="p-3" href="#portfolio">Portfolio</a></li>
                    <li class="py-2 hover:bg-gray transition-all"><a class="p-3" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
      </header>