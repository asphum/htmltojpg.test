<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Slip Test</title>

  <link rel="stylesheet" href="src/main.css">

</head>

<body>

  <section>

    <div id="slipdom" class="slip">

      <div class="headslip">
        <div class="borderleft"></div>
        <div class="headleft">

          <div class="textsuccess">โอนเงินสำเร็จ
          </div>
          <div class="textsuccessdate">10 ก.ค. 64 07:48 น.</div>
        </div>
        <div class="headright">
          <div class="logohead"><img src="images/headlogo.png" /></div>
        </div>

      </div>

      <div style="margin: 0 auto;width:570px;" class="borderbottom"></div>

      <div class="accall">
        <div class="logofrom"><img src="images/ka.png"></div>
        <div class="detailfrom">
          <p style="font-size:1.7rem;font-weight: 400;">นาย กนกร กรกรนกกนกร</p>
          <p>ธ.กสิกรไทย</p>
          <p>XXX-X-X0218-X</p>
        </div>
      </div>

      <img style="width:65px;padding-left: 30px;" src="images/to.png">

      <div class="accall">
        <div class="logofrom"><img src="images/ka.png"></div>
        <div class="detailfrom">
          <p style="font-size:1.7rem;font-weight: 400;">นาย กนกร กรกรนกกนกร</p>
          <p>ธ.กสิกรไทย</p>
          <p>XXX-X-X0218-X</p>
        </div>
      </div>

      <div>
        <div class="detailend">
          <p class="title">เลขที่รายการ:</p>
          <p class="detail borderbottom">011191074841795031</p>
          <p class="title">จำนวน:</p>
          <p class="detail borderbottom">1,500.00 บาท</p>
          <p class="title">ค่าธรรมเนียม:</p>
          <p class="detail borderbottom">0.00 บาท</p>
        </div>
        <div class="barcode"><img src="images/barcode.png">
          <p>Verified by K+</p>
        </div>

      </div>

    </div>

    <button style="padding:10px 15px;border-radius: 6px;border:none;font-size: 1.5rem;margin:20px;background: green;cursor: pointer;color:#fff;" onclick="snapShot()" id="downloadnow">snapShot</button>

    <button style="padding:10px 15px;border-radius: 6px;border:none;font-size: 1.5rem;margin:20px;background: green;cursor: pointer;color:#fff;" onclick="downloadImg()" id="downloadnow">downloadImg</button>

    <script src="./src/dom-to-image.min.js"></script>
    <!-- <script src="./src/FileSaver.min.js"></script> -->

    <script>
      var node = document.getElementById('slipdom');

      function snapShot() {
        domtoimage.toPng(node).then(function(dataUrl) {
          var img = new Image();
          img.src = dataUrl;
          document.body.appendChild(img);
        }).catch(function(error) {
          console.error('oops, something went wrong!', error);
        });
      }

      function downloadImg() {
        domtoimage.toPng(node).then(function(dataUrl) {
          var img = new Image();
          img.src = dataUrl;
          var link = document.createElement('a');
          // var file = new Blob();
          // var file = new Blob(["CONTENT"], {
          //   type: "text/plain"
          // });
          // localStorage.setItem("link", link);
          // link.href = URL.createObjectURL(file)

          link.download = './photos/test.png';
          // link.download = './photos/test.png';
          link.href = dataUrl;
          link.click();


        }).catch(function(error) {
          console.error('oops, something went wrong!', error);
        });
      }
    </script>
</body>

</html>