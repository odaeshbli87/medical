<?php include('header.php');?>
<div class="dirLtr">
<div class="p-4 a4">
    <header class="mb-4">
        <div class="logo d-flex justify-content-between align-items-center">
            <img src="images/albaraka-logo.png" alt="Medical Center Logo" width="100">
            <div class="additional-info text-end">
                <p class="mb-0"><?php echo isset($_GET['hiddenPatientName']) ? $_GET['hiddenPatientName'] : '';?></p>
                <p class="mb-0"><?php echo $_GET['motherName'] ?? ''; ?></p>
                <?php $date = date('Y-m-d')?>
                <p class="mb-0"><?php echo $date?></p>
            </div>
        </div>
        <hr>
    </header>

    <section id="tests-list" class="mb-4">
    
    </section>

    <section id="checkboxes" class="mb-4">
        
    </section>

  <div class="container">

      <table class="table">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Tetkik</th>
              <th scope="col">Sonuç</th>
              <th scope="col">Normal</th>
          </tr>
          </thead>
          <tbody id ="tabaleBody">
          <script>

              let normalValuesForAnalyses ={
                  "CBC AUTOMATED" : "30" ,
                  "RBC Count" : "50"
              }

              let queryString = window.location.search;
              let params = new URLSearchParams(queryString);
              let dataString = params.get('data');
              let receivedObject = JSON.parse(decodeURIComponent(dataString));
              console.log(receivedObject);
              let tabaleBody = document.getElementById("tabaleBody");
              let i = 0;
              Object.keys(receivedObject).forEach(function(key) {
                  i +=1;
                  console.log(key + ":" + receivedObject[key] );
                  let tr = document.createElement("tr");
                  let td0 = document.createElement("td");
                  let td1 = document.createElement("td");
                  let td2 = document.createElement("td");
                  let td3 = document.createElement("td")

                  td0.innerText = i;
                  td1.innerText = key;
                  td2.innerText = receivedObject[key];
                  td3.innerText = normalValuesForAnalyses[key];
                  tr.appendChild(td0);
                  tr.appendChild(td1);
                  tr.appendChild(td2);
                  tr.appendChild(td3);
                  tabaleBody.appendChild(tr);
              });

          </script>
          </tbody>
      </table>
    <footer class="mt-4">
        <p class="text-center">جميع الحقوق محفوظة &copy; 2023</p>
    </footer>
</div>





<?php // include('footer.php');?>
</div>
