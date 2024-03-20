<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Text to Clipboard</title>
</head>
<body>
    <p id="textToCopy">ข้อความที่คุณต้องการให้คัดลอก</p>
    <button onclick="copyText()">คัดลอกข้อความ</button>

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
            alert("คัดลอกข้อความเรียบร้อยแล้ว: " + text);
        }
    </script>
</body>
</html>
