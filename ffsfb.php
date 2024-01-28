<?php
#CODES BY GEO

require_once 'session_manager.php';

if(!isLogin()){
   header('Location: key.php');
   #if incorrect password login back to key.php
}
if (isset($_POST['submit'])){
    $uid = $_POST['uid']; #get uid
    $quantity = $_POST["quantity"]; #get quantity
    
   
    
    
 $apiUrl = "https://graph.facebook.com/$uid?fields=id,is_verified,cover,created_time,work,hometown,username,link,name,locale,location,about,website,birthday,gender,relationship_status,significant_other,quotes,first_name,subscribers.limit(0)&access_token=EAAD6V7os0gcBO39hnm11p84ZCi25Qhd7ZCnZCfROZB8iZAiboBqqzIlqUYsY0qXL6WxZCi6zaWhFROtrCbjkS3Y5DPYfWIaqOIfnsS5JJIMsaZCEAlNkX5wTyLxksfoIEcWUpXdB2cYHZBAZB7Ci05gA1APB9SN4EV1jsfkcOtKqDhBZAs9HtZCZAUJ0sT83RiuOBCEMMgZDZD";
 #API URL TO GET FACEBOOK INFORMATION 


    $response1 = file_get_contents($apiUrl);
$data1 = json_decode($response1, true);
#decode to json
    

  $api = "https://nekaiboosting.shop/api/v2?key=b5ca08ec1883edab84a9a8487f9e6b3a&action=add&service=1141&link=https://www.facebook.com/profile.php?id=$uid&quantity=$quantity";
 #api for boosting
  
    $response = file_get_contents($api);
$data = json_decode($response, true);

    
   

  }
  
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
  <title>Facebook Boost Followers</title>
  
  <style>
    body{
      font-family:"Montserrat", sans-serif;
      text-align:center;
    }

    footer {


      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      bottom: 0;
      left: 0;
      margin-top: 10px;
      z-index: 9999;
      width: 100%;
      height: 4rem;
      color: red;
    }
html {
      scroll-behavior: smooth;

    }
    
    
  </style>
</head>

<body data-theme="dark" style="height:1000px;">
  
  <form method="POST">
  
  <center>
    <br><br>
        <img src="https://i.ibb.co/rdmp1Vq/FB-IMG-17056850130801252.jpg" width="120px" height="120px" style="margin-top:10px; border-radius: 50%; border:1px solid white;">
        </center>
    <div class="">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">

      <h1 class="text-5xl font-bold">Facebook ffs</h1>

    </div>
    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <form class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Facebook UID</span>
          </label>
          <input type="text" placeholder="Working Page/Profile" class="input input-bordered" required name="uid" />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Quantity</span>
          </label>
          <input type="text" placeholder="Min 50 | Max 150k" class="input input-bordered" required name="quantity"/>

        </div>
        <div class="form-control mt-6">
          <input type="submit" value="BOOST" name="submit" class="btn btn-active" style="border:1px solid grey;">
        </div>
         <br>
         
      </form>
    </div>
  </div>
</div>

  
<!-- TABLE -->

<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>

        <th>Name</th>
        <th>Quantity</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>

        <td>
          <div class="flex items-center gap-3">

            </div>
            <div>
              <div class="font-bold"><?php echo $data1['name']; ?></div>
              <div class="text-sm opacity-50"><?php $cover = $data1['hometown'];
                  $name = $hometown['name'];
              echo $cover["name"];  
                  ?></div>
            </div>
          </div>
        </td>
        <td>
         <? echo $quantity; ?>
      
        </td>
        <td><?
            $api3 = "https://nekaiboosting.shop/api/v2?key=b5ca08ec1883edab84a9a8487f9e6b3a&action=status&order=2256";
          
          
            $response3 = file_get_contents($api3);
        $data3 = json_decode($response3, true);
        
          echo $data3["status"];
            ?></td>

      </tr>

      </thread>
      </table>
      </div>
  <footer class="footer footer-center p-4 bg-base-300 text-base-content">
  <aside>
    <p>Copyright © 2023 - Author : Arnolex</p>
  </aside>
</footer>

</form>
</body>

</html>
