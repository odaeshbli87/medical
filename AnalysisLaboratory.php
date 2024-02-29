<?php include('header.php'); ?>

    <div class="container">
        <div class="mb-3">
            <form class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="PatientName" class="form-label" name="PatientName">اسم المريض
                        <input type="text" name="namePatient" class="form-control" id="PatientName"
                               placeholder="اسم المريض الثلاثي" required>
                    </label>
                </div>
                <div class="col-auto">
                    <label for="PatientNameMother" class="form-label" name="PatientNameMother">اسم الأم
                        <input type="text" name="motherName" class="form-control" id="PatientNameMother"
                               placeholder="اسم الأم">
                    </label>
                </div>
                <div class="col-auto">
                    <label for="Gender" class="form-label" name="Gender">الجنس
                        <select class="form-select" id="Gender" required>
                            <option selected disabled>أختر الجنس</option>
                            <option value="1">ذكر</option>
                            <option value="2">أنثى</ذption>
                        </select>
                    </label>
                </div>
                <div class="col-auto">
                    <label for="DoctorName" class="form-label">الطبيب
                        <select class="form-select" name="DoctorName" id="DoctorName">
                            <option selected disabled>أختر الطبيب</option>
                            <option value="1">عبد الكريم</option>
                            <option value="2">سيف</option>
                            <option value="3">محمد رمضان</option>
                            <option value="4">أنعام</option>
                            <option value="5">هناء</option>
                            <option value="6">علي</option>
                        </select>
                    </label>
                </div>
        </div>
        <div class="mainAnalysisSections" id="mainAnalysisSections">
            <h3 class="py-3">الأقسام الرئيسية</h3>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="commonAnalysis" value="CommonAnalysis">
                <label class="form-check-label" for="commonAnalysis">Common Analysis</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="HEMATOLOGY" value="HEMATOLOGY">
                <label class="form-check-label" for="HEMATOLOGY">HEMATOLOGY</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="BIOCHEMISTRY" value="BIOCHEMISTRY">
                <label class="form-check-label" for="BIOCHEMISTRY">BIOCHEMISTRY</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SEROLOGY" value="SEROLOGY">
                <label class="form-check-label" for="SEROLOGY">SEROLOGY</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="HORMONES" value="HORMONES">
                <label class="form-check-label" for="HORMONES">HORMONES</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="COAGULATION" value="COAGULATION">
                <label class="form-check-label" for="COAGULATION">COAGULATION</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="TUMORMARKERS" value="TUMOR MARKERS">
                <label class="form-check-label" for="TUMORMARKERS">TUMOR MARKERS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="IMMUNOLOGY" value="IMMUNOLOGY">
                <label class="form-check-label" for="IMMUNOLOGY">IMMUNOLOGY</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="PREGNANCYTEST" value="PREGNANCY TEST">
                <label class="form-check-label" for="PREGNANCYTEST">PREGNANCY TEST</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="URINE-and-STOOL-ANALYSIS"
                       value="URINE and STOOL ANALYSIS">
                <label class="form-check-label" for="URINE-and-STOOL-ANALYSIS">URINE and STOOL ANALYSIS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="FLUID-ANALYSIS" value="FLUID ANALYSIS">
                <label class="form-check-label" for="FLUID-ANALYSIS">FLUID ANALYSIS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SEMINAL-FLUID-ANALYSIS"
                       value="SEMINAL FLUID ANALYSIS">
                <label class="form-check-label" for="SEMINAL-FLUID-ANALYSIS">SEMINAL FLUID ANALYSIS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="URINE24h" value="URINE 24h">
                <label class="form-check-label" for="URINE24h">URINE 24h</label>
            </div>
            <hr>
        </div>
        <button class="btn btn-primary" id="download">تصدير PDF</button>

        <div class="subAnalysisSections" id="subAnalysisSections">
            <!-- <div class="mb-3">
                <h1 class="text-center">بسم اللَه الرحمن الرحيم</h1>
                <div class="row">
                </div>
            </div> -->
        </div>


        <script>

            // document.addEventListener('DOMContentLoaded', function () {
            //
            //     let basicAnalyses = {
            //         commonAnalysis: {
            //             "CBCAUTOMATED": "CBC AUTOMATED",
            //             "RBCCount": "RBC Count",
            //             "ReticulocytesCount": "Reticulocytes Count",
            //             "E.S.R.(Sedimentation)": "E.S.R. (Sedimentation)",
            //             "WBC&Differential": "WBC & Differential",
            //             "BLOODGROUP": "BLOOD GROUP"
            //         },
            //         HEMATOLOGY: {h1: "h2", h3: "h4"},
            //         BIOCHEMISTRY: {b1: "22", b3: "23"}
            //     };
            //     let customElements = {};
            //     // let arrayName = this.id;
            //     // let selectedArray = basicAnalyses[arrayName];
            //
            //     const checkboxs = document.querySelectorAll('.mainSections input[type="checkbox"]');
            //     checkboxs.forEach(function (checkbox) {
            //         checkbox.addEventListener('change', function () {
            //             let arrayName = this.id;
            //             if (this.checked) {
            //                 reomveDiv = document.getElementById("invoice");
            //                 reomveDiv.style.display = "unset";
            //                 let selectedArray = basicAnalyses[arrayName];
            //
            //                 if (selectedArray && typeof selectedArray === 'object') {
            //
            //                     customElements[arrayName] = [];
            //                     Object.entries(selectedArray).forEach(function ([key, value]) {
            //
            //                         //create Div form-check
            //                         let checkForm = document.createElement("div");
            //                         customElements[arrayName].push(checkForm);
            //                         checkForm.classList = "form-check form-check-inline";
            //                         //  console.log(customElements);
            //                         // إنشاء checkbox
            //                         let subCheackBox = document.createElement("input");
            //                         subCheackBox.type = "checkbox";
            //                         subCheackBox.id = key;
            //                         subCheackBox.name = key;
            //                         subCheackBox.classList = "form-check-input";
            //                         subCheackBox.onclick = createTxtBox;
            //
            //                         // إنشاء label
            //                         let subLabel = document.createElement("label");
            //                         subLabel.classList = "form-check-label";
            //                         subLabel.textContent = value;
            //                         subLabel.setAttribute("for", key);
            //
            //                         // اضافة العناصر المنشأة الى الديف شيك فورم
            //                         checkForm.appendChild(subCheackBox);
            //                         checkForm.appendChild(subLabel);
            //                         // إضافة div form-check إلى container
            //                         let container = document.getElementById('invoice');
            //                         container.appendChild(checkForm);
            //
            //                         //   إذا كانت هناك عناصر داخل div form-check، أضف div للإغلاق
            //                         let emptyDiv = checkForm.querySelector('div');
            //                         if (emptyDiv) {
            //                             emptyDiv.remove();
            //                         }
            //
            //                     });
            //
            //                 }
            //             } else {
            //                 if (customElements[arrayName]) {
            //                     customElements[arrayName].forEach(function (element) {
            //                         if (element.parentNode) {
            //                             element.parentNode.removeChild(element);
            //                         }
            //                     });
            //                 }
            //
            //                 // أفرغ المصفوفة بعد حذف العناصر
            //                 customElements[arrayName] = [];
            //
            //             }
            //
            //             //Create Form
            //
            //             let dynamicForm = document.createElement('form');
            //             dynamicForm.action = "export.php";
            //             dynamicForm.method = "GET";
            //
            //             let submitBtn = document.createElement('button');
            //             submitBtn.type = 'button';
            //             submitBtn.classList = 'btn btn-primary';
            //             submitBtn.innerText = 'Submit';
            //             submitBtn.onclick = sendData;
            //
            //             //Create textBox
            //
            //             let customTxtBox = [];
            //
            //             let allDataTxtBoxValue = {};
            //
            //             function txtValue() {
            //                 txtBoxValue.forEach(function (element) {
            //                     let analysisName= element.placeholder;
            //                     let value = element.value;
            //                     allDataTxtBoxValue[analysisName]= value;
            //                 });
            //             }
            //             function sendData(){
            //                 let pa = "odayalshebly";
            //                 let urlStr = encodeURIComponent(JSON.stringify(allDataTxtBoxValue));
            //                 let pageName="export.php?data=";
            //                 window.location.href= `${pageName}${urlStr}`;
            //             }
            //
            //             function createTxtBox() {
            //                 let hiddenPatientName = document.createElement('input');
            //                 hiddenPatientName.type = "hidden";
            //                 hiddenPatientName.name = "hiddenPatientName";
            //                 hiddenPatientName.value = document.getElementById('PatientName').value;
            //
            //                 txtBoxValue = [];
            //                 if (this.checked) {
            //                     customTxtBox.push(this.id);
            //                     let txtBox = document.createElement('input');
            //                     txtBox.type = "text";
            //                     txtBox.id = "con" + this.id;
            //                     txtBox.name = this.id;
            //                     txtBox.classList = "form-control";
            //                     txtBox.placeholder = basicAnalyses[arrayName][this.id];
            //                     txtBox.required = true;
            //                     txtBox.onchange = txtValue;
            //                     let container = document.getElementById("invoice");
            //                     dynamicForm.appendChild(hiddenPatientName);
            //                     dynamicForm.appendChild(txtBox);
            //                     dynamicForm.appendChild(submitBtn);
            //                     container.appendChild(dynamicForm);
            //                     const findInput = document.querySelector("#" + txtBox.id);
            //                     txtBoxValue.push(findInput);
            //
            //                 } else {
            //                     // let txtBoxToRemove;
            //                     const checkboxs = document.querySelectorAll('.container input[type="checkbox"]');
            //                     checkboxs.forEach(function (checkbox) {
            //                         checkbox.addEventListener('change', function () {
            //                             if (!this.checked) {
            //                                 txtBoxToRemove = document.getElementById("con" + this.id);
            //                                 if (txtBoxToRemove) {
            //                                     txtBoxToRemove.remove();
            //                                 }
            //
            //                             }
            //
            //                         });
            //                     });
            //                 }
            //             }
            //         })
            //     });
            // });

            // document.addEventListener('DOMContentLoaded' , function (){
            //
            //     //createTextBox();
            //     //console.log(createTextBox);
            // }); //loaded

            //==========================================================================

            
            // main variable in Program
            document.addEventListener('DOMContentLoaded',function() {
            
            const mainAnalysisSections = document.getElementById("mainAnalysisSections");
            const subAnalysisSections = document.getElementById("subAnalysisSections");


            // main Analysis objects
            let basicAnalyses = {
                commonAnalysis: {
                    "CBCAUTOMATED": "CBC AUTOMATED",
                    "RBCCount": "RBC Count",
                    "ReticulocytesCount": "Reticulocytes Count",
                    "E.S.R.(Sedimentation)": "E.S.R. (Sedimentation)",
                    "WBC&Differential": "WBC & Differential",
                    "BLOODGROUP": "BLOOD GROUP"
                },
                HEMATOLOGY: {h1: "h2", h3: "h4"},
                BIOCHEMISTRY: {b1: "22", b3: "23"}
                };

            // check on checbox on an contianer
            

            //function for get elements from a place 
            function getElements(target){
                let elements = document.querySelectorAll(target);
                return elements;
            }
        
            
            let checkboxs = document.querySelectorAll("#" + mainAnalysisSections.id + " input[type='checkbox']");

            checkboxs.forEach(function(checkbox){
                checkbox.onchange = function(){
                    if(!checkbox.checked){
                      //const  tt = returnElements('.mainAnalysisSections input[type="checkbox"]');
                     // console.log(tt + " ttt");
                    }
                    else{
                        createTextBox("input","checkbox","","","form-check-input");
                       const ss = returnElements('.mainAnalysisSections input[type="checkbox"]');        
                       console.log(ss +" sss");
                     
                    }
                }
            })

            // function return elements or attribute of this elements on an event We specify it when calling the function.
            // We can specify what Attriput we want to return .
            function returnElements(elements) {
                    return new Promise((resolve, reject) => {
                        const selectedItem = [];
                        const element = document.querySelectorAll(elements);
                        element.forEach(function (ele) {
                            ele.addEventListener('change', function () {
                                selectedItem.push(ele.id);
                                resolve(selectedItem); // حل الوعد بعد الانتهاء من الأحداث
                            });
                        });
                    });
                }

// كيفية استخدام الوعد:
returnElements('#mainAnalysisSections input[type="checkbox"]').then(selectedItems => {
    console.log(selectedItems); // هنا يمكنك التعامل مع القيم المسترجعة بعد حدوث التغيير
});

            //function for create and append an elements 
            function createTextBox(element, type, name = "", id = "", className = "", placeholder = "", value = "", textContent = "", required = false) {
                const selectedAnalysesGroup = document.createElement("div");
                
                
                Object.keys(basicAnalyses.commonAnalysis).forEach(function (key) {
                    let value = basicAnalyses.commonAnalysis[key];
                
                    const analysis = document.createElement("div"); // إنشاء عنصر label
                    //div.id = key;
                    analysis.className = "form-check form-check-inline";
                    
                    const label = document.createElement("label"); // إنشاء عنصر label
                    label.htmlFor = key; // تعيين الـ htmlFor للـ key
                    label.textContent = basicAnalyses.commonAnalysis[key]; // تعيين النص المناسب للـ label
                    label.className = "form-check-label";
                    
                    const ele = document.createElement(element);
                    ele.type = type;
                    ele.name = key;
                    ele.id = key;
                    ele.className = className;
                    ele.placeholder = value;
                    ele.value = "";
                    ele.textContent = value;
                    ele.required = required;
        
                    let elements = [];
                    elements.push(ele);
                    elements.push(label); // إضافة عنصر label إلى المصفوفة elements
                    elements.forEach(function (els) {
                        analysis.appendChild(els);
                    });
                    selectedAnalysesGroup.appendChild(analysis);
                    subAnalysisSections.appendChild(selectedAnalysesGroup);
                })
}



            // function to add elements to a place;
            // function addEle(father,child){
            //     father.appendChild(child);
            // }
            

            })//end DOM Listener
            



        </script>
    </div>

<?php include('footer.php'); ?>