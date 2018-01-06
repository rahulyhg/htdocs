var jobTitle=["ALL", "CHIRURGIE GENERALA", "PNEUMOLOGIE", "OBSTETRICA-GINECOLOGIE",  "ORTOPEDIE-SI-TRAUMATOLOGIE"];
function createAppoimentModal(){
    
    var test=document.querySelectorAll(".modal");
    if(test.length<2){    
        $(document).ready(function(){
            $('.phone').mask('0000-000-000');
        });
        var modal=document.createElement("div");
        modal.className="modal fade";
        modal.id="appoimentsModal";
        modal.setAttribute("role", "dialog");

        var modalDialog=document.createElement("div");
        modalDialog.className="modal-dialog";

        var modalContent=document.createElement("div");
        modalContent.className="modal-content";

        var modalHeader=document.createElement("div");
        modalHeader.className="modal-header";
        var modalHeaderButton=document.createElement("button");
        modalHeaderButton.type="button";
        modalHeaderButton.className="close";
        modalHeaderButton.setAttribute("data-dismiss", "modal");
        modalHeaderButton.innerHTML="&times;";
        var modalHeaderTitle=document.createElement("h4");
        modalHeaderTitle.className="text-center";
        modalHeaderTitle.innerHTML="Programare medic";

        modalHeader.appendChild(modalHeaderTitle);
        //modalHeader.appendChild(modalHeaderButton);


        var modalBody=document.createElement("div");
        modalBody.className="modal-body";
        var modalBodyDetails=document.createElement("h7");
        modalBodyDetails.innerHTML="Te rugăm să completezi cu atenție câmpurile de mai jos. Vei fi contactat în cel mai scurt timp posibil de un consilier Regna pentru a stabili toate detaliile necesare.<hr>";

        modalBody.appendChild(modalBodyDetails);

        var modalBodySpec=document.createElement("div"); 
        modalBodySpec.className="form-group";
        var modalBodySpecLabel=document.createElement("label"); 
        modalBodySpecLabel.innerHTML="Specialitate: <strong style='color:red'>*</strong>";
        var modalBodySpecInput=document.createElement("select"); 
        modalBodySpecInput.className="form-control";
        modalBodySpecInput.id="inputSpecialitate";
        for(var i=0; i<jobTitle.length; i++){
            var option=document.createElement("option");
            option.value=jobTitle[i];
            option.innerHTML=jobTitle[i];
            modalBodySpecInput.appendChild(option);
        }

        modalBodySpec.appendChild(modalBodySpecLabel);
        modalBodySpec.appendChild(modalBodySpecInput);

        var modalBodyName=document.createElement("div"); 
        modalBodyName.className="form-group";
        var modalBodyNameLabel=document.createElement("label"); 
        modalBodyNameLabel.innerHTML="Nume: <strong style='color:red'>*</strong>";
        var modalBodyNameInput=document.createElement("input"); 
        modalBodyNameInput.className="form-control";
        modalBodyNameInput.id="inputName";
        modalBodyNameInput.type="text";

        modalBodyName.appendChild(modalBodyNameLabel);
        modalBodyName.appendChild(modalBodyNameInput);

        var modalBodySurname=document.createElement("div"); 
        modalBodySurname.className="form-group";
        var modalBodySurnameLabel=document.createElement("label"); 
        modalBodySurnameLabel.innerHTML="Prenume: <strong style='color:red'>*</strong>";
        var modalBodySurnameInput=document.createElement("input"); 
        modalBodySurnameInput.className="form-control";
        modalBodySurnameInput.id="inputSurname";
        modalBodySurnameInput.type="text";

        modalBodySurname.appendChild(modalBodySurnameLabel);
        modalBodySurname.appendChild(modalBodySurnameInput);

        var modalBodyPhone=document.createElement("div"); 
        modalBodyPhone.className="form-group";
        var modalBodyPhoneLabel=document.createElement("label"); 
        modalBodyPhoneLabel.innerHTML="Telefon: <strong style='color:red'>*</strong>";
        var modalBodyPhoneInput=document.createElement("input"); 
        modalBodyPhoneInput.className="form-control phone";
        modalBodyPhoneInput.id="inputPhone";
        modalBodyPhoneInput.type="text";

        modalBodyPhone.appendChild(modalBodyPhoneLabel);
        modalBodyPhone.appendChild(modalBodyPhoneInput);


        modalBody.appendChild(modalBodySpec);
        modalBody.appendChild(modalBodyName);
        modalBody.appendChild(modalBodySurname);
        modalBody.appendChild(modalBodyPhone);

        var modalFooter=document.createElement("div");
        modalFooter.className="modal-footer";
        var modalFooterButton=document.createElement("button");
        modalFooterButton.setAttribute("type","button");
        modalFooterButton.className="btn btn-success btn-lg";
        modalFooterButton.setAttribute("data-dismiss", "modal");
        modalFooterButton.setAttribute("onclick","submitFormReservation()");
        modalFooterButton.innerHTML="Trimite programare";

        modalFooter.appendChild(modalFooterButton);


        modalContent.appendChild(modalHeader);
        modalContent.appendChild(modalBody);
        modalContent.appendChild(modalFooter);
        modalDialog.appendChild(modalContent);
        modal.appendChild(modalDialog);

        document.getElementsByTagName("body")[0].appendChild(modal);
    } else {
        $("#appoimentsModal").modal('show');
    }
}

function submitFormReservation(){
    
    var job_title=document.getElementById("inputSpecialitate").value;
    var last_name=document.getElementById("inputName").value;
    var first_name=document.getElementById("inputSurname").value;
    var phone=document.getElementById("inputPhone").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            //$("#appoimentsModal").modal('hide');
            var response=this.responseText;
            alert(response);
            document.getElementById("inputSpecialitate").value="ALL";
            document.getElementById("inputName").value="";
            document.getElementById("inputSurname").value="";
            document.getElementById("inputPhone").value="";
        }
    };
    xhttp.open("GET", "/Medici/BackEnd/quickReservations.php?job_title="+job_title+"&last_name="+last_name+"&first_name="+first_name+"&phone="+phone, true);
    xhttp.send(); 
}