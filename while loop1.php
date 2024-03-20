<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Python</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>  
        header {
            background-image: url('Python-programming-for-hackers-compressed.jpg');
            color: #fff;
            padding: 40px 0;
            text-align: center;
            font-size: 20px;
            
        }
        #image2 {
            width: 36%;
            
        }
        .cool-button {
            display: inline-block;
            padding: 10px 50px;
            font-size: 16px;
            color: #000;
            background-color: #000;
            border: 2px solid transparent;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            /* margin: 0 auto;
            display: block;
            text-align: center; */
            
        }
        #button2{
            margin-right: 10px;
            margin-bottom: 0px;
        }
        #button3{
            margin-right:  10px;
            margin-bottom: 0px;
        }
        h4 {
            margin-right:  20px;
            margin-bottom: 0px;
        }
        #img5 { /*สีขาวหน้าหลัก*/
            margin-right:  0px;
            margin-bottom: 0px;
        }
        h2 {
            margin-left: 14em;
        }
        h1 {
            margin-left: 11.2em;
        }
        h4 {
            margin-left: 18.7em;
            
        }
        h3 {
            margin-left: 16.2em;
            
        }
        button {
          margin-left: 30.2em;
        }
        .move-right {
            white-space: pre-line; /* ใช้ให้ CSS จัดการตำแหน่งของบรรทัด */
        }

        .move-right > span {
            display: inline-block;
            transform: translateX(20px); /* ขยับข้อความไปทางขวา 10px */
        }
        </style>
</head>
<header>
<body>
<script>
        function copyText() {
            /* เลือกข้อความที่ต้องการคัดลอก */
            var text = document.getElementById("textToCopy").innerText;

            /* สร้าง element textarea ซ่อนไว้ */
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.width = "2em";
            textArea.style.height = "2em";
            textArea.style.padding = "0";
            textArea.style.border = "none";
            textArea.style.outline = "none";
            textArea.style.boxShadow = "none";
            textArea.style.background = "transparent";

            /* เพิ่ม element textarea ลงใน DOM */
            document.body.appendChild(textArea);

            /* เลือกและคัดลอกข้อความใน textarea */
            textArea.select();
            document.execCommand("copy");

            /* ลบ element textarea ทิ้งหลังจากคัดลอกเสร็จสมบูรณ์ */
            document.body.removeChild(textArea);

            /* แจ้งเตือนว่าคัดลอกข้อความเสร็จสมบูรณ์ */
            alert("คัดลอกโค้ดเรียบร้อยแล้ว: " + text);
        }
        
    </script>
    <script>
        function copyText1() {
            /* เลือกข้อความที่ต้องการคัดลอก */
            var text = document.getElementById("textToCopy1").innerText;

            /* สร้าง element textarea ซ่อนไว้ */
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.width = "2em";
            textArea.style.height = "2em";
            textArea.style.padding = "0";
            textArea.style.border = "none";
            textArea.style.outline = "none";
            textArea.style.boxShadow = "none";
            textArea.style.background = "transparent";

            /* เพิ่ม element textarea ลงใน DOM */
            document.body.appendChild(textArea);

            /* เลือกและคัดลอกข้อความใน textarea */
            textArea.select();
            document.execCommand("copy");

            /* ลบ element textarea ทิ้งหลังจากคัดลอกเสร็จสมบูรณ์ */
            document.body.removeChild(textArea);

            /* แจ้งเตือนว่าคัดลอกข้อความเสร็จสมบูรณ์ */
            alert("คัดลอกโค้ดเรียบร้อยแล้ว: " + text);
            
        }
    </script>
    <script>
        function copyText2() {
            /* เลือกข้อความที่ต้องการคัดลอก */
            var text = document.getElementById("textToCopy2").innerText;

            /* สร้าง element textarea ซ่อนไว้ */
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.width = "2em";
            textArea.style.height = "2em";
            textArea.style.padding = "0";
            textArea.style.border = "none";
            textArea.style.outline = "none";
            textArea.style.boxShadow = "none";
            textArea.style.background = "transparent";

            /* เพิ่ม element textarea ลงใน DOM */
            document.body.appendChild(textArea);

            /* เลือกและคัดลอกข้อความใน textarea */
            textArea.select();
            document.execCommand("copy");

            /* ลบ element textarea ทิ้งหลังจากคัดลอกเสร็จสมบูรณ์ */
            document.body.removeChild(textArea);

            /* แจ้งเตือนว่าคัดลอกข้อความเสร็จสมบูรณ์ */
            alert("คัดลอกโค้ดเรียบร้อยแล้ว: " + text);
            
        }
    </script>
        <script>
        function copyText3() {
            /* เลือกข้อความที่ต้องการคัดลอก */
            var text = document.getElementById("textToCopy3").innerText;

            /* สร้าง element textarea ซ่อนไว้ */
            var textArea = document.createElement("textarea");
            textArea.value = text;
            textArea.style.position = "fixed";
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.width = "2em";
            textArea.style.height = "2em";
            textArea.style.padding = "0";
            textArea.style.border = "none";
            textArea.style.outline = "none";
            textArea.style.boxShadow = "none";
            textArea.style.background = "transparent";

            /* เพิ่ม element textarea ลงใน DOM */
            document.body.appendChild(textArea);

            /* เลือกและคัดลอกข้อความใน textarea */
            textArea.select();
            document.execCommand("copy");

            /* ลบ element textarea ทิ้งหลังจากคัดลอกเสร็จสมบูรณ์ */
            document.body.removeChild(textArea);

            /* แจ้งเตือนว่าคัดลอกข้อความเสร็จสมบูรณ์ */
            alert("คัดลอกโค้ดเรียบร้อยแล้ว: " + text);
            
        }
    </script>

<nav class="  nav navbar navbar-expand-lg text-light">
      <div class="container-fluid">
        <a class="navbar-brand text-dark  bg-body-tertiary" href="#" ></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="">
          <div class="navbar-nav">
          <a  id="a4"class="navbar-brand text-light" href="index.php">
      <img id="img2" src="bootstrap-logo.svg " alt="Logo" width="30" height="24" class="d-inline-block align-text-top  " > AOI</a>
          <a class="nav-link active  bg-body-tertiary text-dark" aria-current="page" href="index.php" >หน้าหลัก</a>
          <a class="nav-link active  bg-body-tertiary text-dark" aria-current="page" href="db.php" >เนื้อหาบทเรียน</a>
          <a class="nav-link active  bg-body-tertiary text-dark" aria-current="page" href="pic.php">ข้อมูลทั่วไป</a>
            <a class="nav-link text-light bg-body-tertiary text-dark" href="paisan.php">คณะที่ปรึกษา</a>
            <a class="nav-link text-light bg-body-tertiary text-dark" href="name.php">คณะผู้จัดทำ</a>
          </div>
        </div>
      </div>
    </nav>  
  <nav class="navbar ">
  <div class="container-fluid">  
  <a class="navbar-brand text-light" href="#">
  
</div>
</nav>
</header>

<div style="text-align: center;"> <img src="บทที่4.jpg" style="height: 100%;" width="50%" ></div>
<br><br>


<div style="text-align: center;">
 
       
<iframe width="800" height="500" src="https://www.youtube.com/embed/ZCSec47ThJ8?si=YgH7AmKLa0ISoOQt" frameborder="0" allowfullscreen></iframe> 
</div>


<div style="text-align: rigth;" >

        <h1 class="text-dark "  >-หัวข้อของคลิปนี้-</h1>
        <br>
    <h4 class="text-dark "  style="font-weight: bold;" >1. while loop</h4>
    <h4 class="text-dark "  style="font-weight: bold;" >2. for loop</h4>
    <h4 class="text-dark "  style="font-weight: bold;" >3. continue</h4>
    <h4 class="text-dark "  style="font-weight: bold;" >4. else,loop</h4>
    <br><br>
    <h1 class="text-dark  " style="font-weight: bold;" >-Code ในคลิป while loop-</h1>
    <br>
    <button onclick="copyText()">คัดลอกโค้ด</button>
    <h4 class="text-dark move-right "  id="textToCopy">
    i = 1<br>
    while i <= 10:<br>
    <span>print(i, end = ',')<br></span>
    <span>i = i +1</span><br>
    
</h4>
    <h1 class="text-dark  " style="font-weight: bold;" >-Code ในคลิป for loop-</h1>
    <br>
    <button onclick="copyText1()" id="copyText1">คัดลอกโค้ด</button>
    <h4 class="text-dark move-right "  id="textToCopy1">
    for i in range(1,10):<br>
    <span>print(i)</span><br>
</h4>
    <h1 class="text-dark  " style="font-weight: bold;" >-Code ในคลิป continue-</h1>
    <br>
    <button onclick="copyText2()" id="copyText2">คัดลอกโค้ด</button>
    <h4 class="text-dark move-right "  id="textToCopy2">
    for i in range(1,11):<br>
    <span>if i % 2 ==1:</span><br>
        <span>continue</span><br>
    <span>print(i, end = ',')</span><br>
</h4>
<h1 class="text-dark  " style="font-weight: bold;" >-Code ในคลิป else,loop-</h1>
    <br>
    <button onclick="copyText3()" id="copyText3">คัดลอกโค้ด</button>
    <h4 class="text-dark move-right "  id="textToCopy3">
    name = ['maja' , 'koka' , 'efah']<br>
    search = 'maja'<br>
    for n in name:<br>
    if search == n:<br>
        print(search+ ' is found in list')<br>
    break<br>
    else:<br>
    print('not found')<br>
    <br>
    search = 'koka'<br>
    for n in name:<br>
    if search == n:<br>
        print(search+ ' is found in list')<br>
        break<br>
        <br>
    else:<br>
        print('not found!?!?')<br>
</h4>
</div>
  </form>
</nav>
   

    





</body>
</html>