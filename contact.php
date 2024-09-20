<?php 
  if ($_POST) {
    $env = parse_ini_file('.env');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $data = [
      "sender" => [
        "name" => $name ?? "Unknown",
        "email" => $email
      ],
      "to" => array([
        "email" => "jdlandau123@gmail.com",
        "name" => "Joshua Landau"
      ]),
      "subject" => "New Message From Portfolio Site",
      "textContent" => "From: " . $name . " - " . $email . "\n\n" . $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $env["SMTP_URL"]);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'content-type: application/json',
      'accept: application/json',
      'api-key: ' . $env["SMTP_API_KEY"]
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch); 
  
    if ($response === false) { 
        die('Error occurred while fetching the data: ' 
            . curl_error($ch)); 
    } 
      
    curl_close($ch); 
  }
?>
<section class="mt-5">
  <h3 class="text-center text-3xl mb-4">Contact Me</h3>
  <form class="flex flex-col justify-center items-center gap-4 text-black" action="/portfolio/index.php" method="POST">
    <input name="name" class="w-full md:w-1/2 p-2 rounded" type="text" placeholder="Name" required />
    <input name="email" class="w-full md:w-1/2 p-2 rounded" type="email" placeholder="Email" required />
    <textarea name="message" class="w-full md:w-1/2 p-2 rounded" type="text" placeholder="Message" required></textarea>
    <button class="p-2 w-fit rounded bg-white text-black border hover:scale-105 transition-all ease-in duration-200"
      type="submit">Submit</button>
  </form>
  <p class="text-center">
    <?php if ($_POST) echo "Thanks for reaching out!" ?>
  </p>
</section>
