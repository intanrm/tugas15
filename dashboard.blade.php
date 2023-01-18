<x-app-layout>
<script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <header class="bg-header">
        <section class="container px-5 xl:px-0 mx-auto">
            <section id="topbar" class="flex justify-between gap-10 items-center py-5">
                <div id="left-side" class="flex gap-10 items-center">
                    <img src={{asset("img/Frame-2.png")}} alt="">
                    <nav class="fixed w-full h-full top-0 p-10 lg:p-0 lg:relative bg-primary lg:bg-transparent z-40">
                        <ul class="flex flex-col lg:flex-row gap-y-5 gap-x-2 items-center">
                            <li>
                                <a href="#">Home</span></a>
                            </li>
                            <li class="has-child">
                                <a href="#">  
                                About</a>
                                <span class="caret"></span>
                                <ul class="submenu">
                                    <li><a href="#">Visi</a></li>
                                    <li><a href="#">Misi</a></li>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon-address-book"></span>
                                    Service
                                </a>
                            </li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </nav>
                  </div>
                  
                      <div>
                    <button class="button-primary">Log In</button>
                    <button class="button-primary">Get Started</button>
                    </div>
                <button class="mobile-btn fixed right-6 top-6 lg:static lg:hidden z-40">
                    <svg class="bar" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 17H19M5 12H19M5 7H19" stroke="black" stroke-width="2.01562" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.6439 11.9998L18.657 6.99835C18.8765 6.77882 18.9998 6.48107 18.9998 6.17061C18.9998 5.86014 18.8765 5.5624 18.657 5.34286C18.4374 5.12333 18.1397 5 17.8292 5C17.5187 5 17.221 5.12333 17.0015 5.34286L12 10.356L6.99857 5.34286C6.77904 5.12333 6.48129 5 6.17083 5C5.86036 5 5.56261 5.12333 5.34308 5.34286C5.12355 5.5624 5.00022 5.86014 5.00022 6.17061C5.00022 6.48107 5.12355 6.77882 5.34308 6.99835L10.3562 11.9998L5.34308 17.0012C5.23381 17.1096 5.14708 17.2386 5.08789 17.3806C5.0287 17.5227 4.99823 17.6751 4.99823 17.829C4.99823 17.9829 5.0287 18.1353 5.08789 18.2773C5.14708 18.4194 5.23381 18.5484 5.34308 18.6567C5.45146 18.766 5.58041 18.8527 5.72247 18.9119C5.86454 18.9711 6.01692 19.0016 6.17083 19.0016C6.32473 19.0016 6.47711 18.9711 6.61918 18.9119C6.76125 18.8527 6.89019 18.766 6.99857 18.6567L12 13.6436L17.0015 18.6567C17.1098 18.766 17.2388 18.8527 17.3809 18.9119C17.5229 18.9711 17.6753 19.0016 17.8292 19.0016C17.9831 19.0016 18.1355 18.9711 18.2776 18.9119C18.4196 18.8527 18.5486 18.766 18.657 18.6567C18.7662 18.5484 18.853 18.4194 18.9121 18.2773C18.9713 18.1353 19.0018 17.9829 19.0018 17.829C19.0018 17.6751 18.9713 17.5227 18.9121 17.3806C18.853 17.2386 18.7662 17.1096 18.657 17.0012L13.6439 11.9998Z" fill="#000"/>
                    </svg>                                                        
                </button>
            </section>
        </section>
        <div
        class="popup absolute inset-x-0 top-10 border border-gray-300 bg-white shadow-lg right-12 rounded-lg p-4 hidden md:hidden z-30">
        <div class="flex space-x-5">
          <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
         
        <div class="space-y-4 flex flex-col">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Services</a>
          <a href="">Download</a>
        </div>

        <div class="flex flex-col mt-4">
          <a href="" class="btn rounded">Get Started</a>
        </div>
      </div>
    </nav>
  </header>

  <section class="container pt-8 pb-28 flex flex-col items-center lg:flex-row">
    <div class="space-y-8 flex-1 max-w-[810px] ">
      <span class="text-orange-500">Dashboard Admin Manager</span>
      <h1 class="text-7xl font-bold leading-none relative">
        <span class="text-blue-500"> Managing Finances </span> Well will make you Live rich
      </h1>
      <p class="text-xl text-gray-500">
        Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
      </p>

      <div class="flex space-x-5">
          <a href="" class="btn rounded"> Get Started </a>
          <a href="" class="btn rounded">Download</a>

      </div>
    </div>

    <div class="absolute right-0 z-20">

      <img src="./img/hero.png" alt="">

    </div>


    

    <!-- <div class="flex space-x-4 flex-1 hidden lg:flex">
      <img class="w-full" src="./assets/chair-1.png" alt="">
      <img class="relative -bottom-14 w-full" src="./assets/chair-2.png" alt="">
    </div> -->
  </section>

  <section class="bg-[#FFC741;]">

    <div class="relative">
    
      <div class="absolute right-0 -top-56">
      
          <img class="" src="img/Frame-433.png" alt="">

      </div>


  </div>

    <section class="container mx-auto mt-32">
    
      <section class=" text-white py-10">
        <div class="flex gap-24 text-3xl">
          <p>500 +</p>
          <p>100K +</p>
          <P>3,23m +</P>
    
      </div>

      <div class="flex gap-32 ml-4 mt-2 ">
        <p>Partner</p>
        <p>User </p>
        <P>Download</P>
  
    </div>

    <div class="flex gap-24">
      <p>Word Wide</p>
      <p>Word Wide</p>
      <P class="ml-5">Total</P>

  </div>

      </section>
    
  
    </section>

  </section>

  <section class="container mx-auto mb-64">

    <div>
      <p>
        partner :
      </p>
    </div>

    <div class="flex gap-10">
      <img src="img/microsoft-logo.png" alt="">
      <img src="img/Google-logo.png" alt="">
      <img src="img/Tesla-logo.png" alt="">

      
    
    </div>

    <div class="flex gap-10 mt-10">
      <img src="img/Payoneer-logo.png" alt="">
      <img src="img/PayPal_logo_logo.png" alt="">
    </div>

  </section>

  <section class="container mx-auto mt-40">

    <div class="flex float-right ">
      <img src="img/Mask-group-(1).png" alt="">
    </div>

    <div>
      <p class="text-sm text-[#FFC741] mb-4">Dashboard Admin Manager </p>
      <h1 class="text-5xl">Very professional protection</h1>
      <p class="text-sm mt-5 max-w-[540px]">
        Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
      </p>
      <p class="font-bold text-sm mt-5">For Protect  your date:</p>
    </div>

    <div class="flex gap-2">
      <img src="img/Group-187.png" alt="">
      <img class="ml-5 " src="img/wordpress-lockup-logo.png" alt="">

  </div>

  </section>

  <section class="bg-[#F5FBFC]">

    <section class="container mx-auto mb-64">


      <div class="flex gap-32 mt-32">

                
        <div class="relative  w-[500px]">


            <div class="absolute">
            
                <img class="" src="img/Group-196.png" alt="">

            </div>

        </div>

        <div class="mt-24">

          <p class="text-sm text-[#FFC741] mb-4">Money Saved</p>

            <h1 class="text-5xl max-w-[500px] flex items-center font-bold ">
              Want to know how much You can  on $eduiten ?
            </h1>
            
            <img src="img/Group-192.png" alt="">
           
        </div>

    </div>
    

      </div>

    </section>

  </section>

  <section class="container mx-auto ">

    <div>


      <div class="grid grid-cols-1 grid-rows-1 float-right">

        <div class="flex flex-col lg:flex-row gap-6">

          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div> 
              <img src="img/Frame-54.png" alt="">
            </div>

            <div>
              <h1 class="text-2xl font-bold mt-8 ml-5"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> We work with providers who are very fast in currency transfer </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>

            </div>
  
          </div>
  
          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div> 
              <img src="img/Frame-55.png" alt="">
            </div>

            <div>
              <h1 class="text-2xl font-bold mt-8 ml-5"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> We provide a very impressive user experience </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>

            </div>
  
          </div>

          

       

        </div>

        <div class="flex flex-col lg:flex-row  gap-6 mt-10">

          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div> 
              <img src="img/Frame-54-(1).png" alt="">
            </div>

            <div>
              <h1 class="text-2xl font-bold mt-8 ml-5"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> Easy to send money to other E-Wallet bank </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>

            </div>
  
          </div>

          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div> 
              <img src="img/Frame-55-(1).png" alt="">
            </div>

            <div>
              <h1 class="text-2xl font-bold mt-8 ml-5"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> Monthly maintenance for our users </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> Read more </p>

            </div>
  
          </div>

        </div>

      </div>

      <div class="pt-28 ">
        <p class="text-sm text-[#FFC741] mb-4">Available Features </p>
        <h1 class="text-5xl max-w-[540px]">We come with some Amazing features</h1>
        <p class="text-sm mt-5 max-w-[540px]">
          Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
        </p>

        <div class="pt-10">
          <a href="" class="btn rounded">Browse Features</a>
        </div>

      </div>

    

    </div>

  </section>

  <section class="bg-[#F5FBFC] mt-60 pt-10 pb-10">

    <section class="container mx-auto">

      <div class="flex justify-center">

        <div class="">
          <p class="text-sm text-[#FFC741] mb-4 pl-64">Available Features </p>
          <h1 class="text-6xl text-[#33B8C8] ">Dashboard Profesional for </h1>
          <h1 class="text-6xl pl-36 text-[#33B8C8] ">Your E-Wallet</h1>
        </div>

       
  
      </div>

      <div class="relative">

        <div class=" flex justify-center">
          <img src="img/Group-197.png" alt="">
        </div>
  
        <div class="absolute top-32">
          <img src="img/Frame-191.png" alt="">
        </div>

        <div class="absolute top-32 right-0">
          <img src="img/Frame-192.png" alt="">
        </div>

      </div>

      <div class="flex justify-center">
        <p>
          Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling. 
        </p>
      </div>

      <div class="flex justify-center gap-10 mt-10">
        <a href="" class="btn rounded">Get Started</a>
        <a href="" class="btn rounded">download</a>
      </div>

      

    </section>

   

  </section>

  <section class="container mx-auto">

      <div class="pt-28 ">
        <p class="text-sm text-[#FFC741] mb-4">Testimonial </p>
        <h1 class="text-5xl ">Our clients say</h1>
        <p class="text-sm mt-5 max-w-[540px]">
          Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling. 
        </p>


      </div>

      <div class="grid grid-cols-1 grid-rows-1 mt-10">

        <div class="flex flex-col lg:flex-row gap-6">

          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div class=" pl-10"> 
              <img src="img/Frame-48.png" alt="">
            </div>

            <div>

              <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great experience with Seduten, with easy-to-understand features and guaranteed safety </p>


            </div>

            <div class="mt-10 ml-5">
              <img src="img/Group-204.png" alt="">
            </div>
  
          </div>
  
          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div class=" pl-10"> 
              <img src="img/Tesla-logo2.png" alt="">
            </div>

            <div>

              <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great money storage with very large limits for saving money, safe and very reliable </p>


            </div>

            <div class="mt-10 ml-5">
              <img src="img/Group-204-(1).png" alt="">
            </div>
  
          </div>
          

       

        </div>

      </div>

  </section>

  

  

  

  <section class="bg-[#002125;] text-white py-14 mt-32">
    <div
      class="container flex flex-col space-y-5 md:flex-row md:space-y-0 items-center md:items-start md:justify-center space-x-12">
      <div class="flex flex-col">
        <div class="flex items-center gap-5 mb-5">
          <img src="./assets/Logo.svg" alt="" width="40">
          <p class="font-bold">$eduiten</p>
        </div>

        <p class="max-w-[380px]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5">
          <li>
            <img src="img/facebook.svg" alt="">
          </li>
          <li>
            <img src="img/twiter.png" alt="">
          </li>
          <li>
            <img src="img/in.svg" alt="">
          </li>
          <li>
            <img src="img/instagram.svg" alt="">
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 gap-y-8">
        <div>
          <p class="font-bold py-2">Navigation</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Home</li>
            <li>About Us</li>
            <li>Shop</li>
            <li>Our Client</li>
            <li>Login</li>
            <li>Register</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Featured</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Dashboard</li>
            <li>Message</li>
            <li>Invesment</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Form Member</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Privacy Policy</li>
            <li>Support</li>
          </ul>
        </div>

        <div>
          <p class="font-bold py-2">Contact</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>hallo@seduitenID.com</li>
            <li>(702) 555-0122</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#212121] py-5">
    <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
  </footer>
    
</x-app-layout>
