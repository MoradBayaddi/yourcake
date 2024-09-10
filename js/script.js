// document.addEventListener("DOMContentLoaded", function(){
//     // make it as accordion for smaller screens
//     if (window.innerWidth > 992) {
    
//         document.querySelectorAll('.navbar .nav-items').forEach(function(everyitem){
    
//             everyitem.addEventListener('mouseover', function(e){
    
//                 let el_link = this.querySelector('a[data-bs-toggle]');
    
//                 if(el_link != null){
//                     let nextEl = el_link.nextElementSibling;
//                     el_link.classList.add('show');
//                     nextEl.classList.add('show');
//                 }
    
//             });
//             everyitem.addEventListener('mouseleave', function(e){
//                 let el_link = this.querySelector('a[data-bs-toggle]');
    
//                 if(el_link != null){
//                     let nextEl = el_link.nextElementSibling;
//                     el_link.classList.remove('show');
//                     nextEl.classList.remove('show');
//                 }
    
    
//             })
//         });
    
//     }
//     // end if innerWidth
//     }); 
//     // range---------------------------------------

// // range---------------------------------------
// new Vue({
//     el: '#app',
//     data: () => ({
//       fab: false
//     }),
  
//     methods: {
//       onScroll (e) {
//         if (typeof window === 'undefined') return
//         const top = window.pageYOffset ||   e.target.scrollTop || 0
//         this.fab = top > 20
//       },
//       toTop () {
//         this.$vuetify.goTo(0)
//       }
//     }
//   })


//   // -------------------------------------------------
//   // var nbrpan=document.getElementById("nbr_panier");
//   // var btn_panier=document.getElementById("panier_click");

//   // btn_panier.addEventListener("click",function(){
//   //   nbrpan.value+=1;
//   // });
//  $(document).ready(function()
//  {
//    $('.btn-check').click(function(){
//    var radio_id=document.getElementsByClassName('btn-check');
//    for(i=0;i<radio_id.length;i++)
//    {
//      if(i.checked)
//      {
//        alert(i.id);
//      }
//    }
//    })
//  }
//  );
             
       //JavaScript For Produit Details//
       //Prix //     
        var prix1=document.getElementById("prix1");
        var prixFirst= parseInt(prix1.innerText);
      var prix2=document.getElementById("prix2");
      var result=parseInt(prix1.innerText)+40;
      var inputPrix=document.getElementById("prixsum");
      prix2.innerText= result+"Dh";
      //select Weghti//
      let radioButtons = document.querySelectorAll('input[name="btnradio"]');

      function myfunction(event) {
        
        if(event.target.id=='btnradio1')
        {
          prix1.innerText=prixFirst+'Dh';
          prix2.innerText= result+"Dh";
          inputPrix.value= prix1.innerText

          

        }
       else if(event.target.id=='btnradio2')
       {
        prix2.innerText= result+50+ "Dh";
         prix1.innerText=prixFirst+50;
         inputPrix.value= prix1.innerText
        
         
       }
       else if(event.target.id=='btnradio3')
       {
        prix2.innerText= result+80+ "Dh";
        prix1.innerText=prixFirst+80;
        inputPrix.value= prix1.innerText
       }
      else if(event.target.id=='btnradio4')
      {
        prix2.innerText= result+100+ "Dh";
        prix1.innerText=prixFirst+90;
        inputPrix.value= prix1.innerText
      }
      else if(event.target.id=='btnradio5')
      {
        prix2.innerText= result+120+ "Dh";
        prix1.innerText=prixFirst+100;
        inputPrix.value= prix1.innerText
      }
    }
    document.querySelectorAll("input[name='btnradio']").forEach((input) => {
        input.addEventListener('change', myfunction);
    });
 

    ///Validation Foem Signup 

    function Validation()
    {
      var flag=true
      var id=document.getElementById("idclt");
      var p=document.getElementById("peuror");
      var prenom=document.getElementById("prenom");
      var email=document.getElementById("email");
      var tele=document.getElementById("tele");
      var pass1=document.getElementById("password");
      var pass2=document.getElementById("password2");
      var ville=document.getElementById("ville");
      var adresse=document.getElementById("adresse");
      

      if(id.value=="" ||prenom.value==""||email.value==""||tele.value==""||pass1.value=="" ||pass2.value==""||ville.value==""||adresse.value=="")
      {
        p.style.display="block";
        p.innerText="Doit Remplir Tous Chmaps svp";
        
          if(tele.value=="") tele.focus();
        if(adresse.value=="") adresse.focus();
        if(ville.value=="") ville.focus();
        if(pass2.value=="") pass2.focus();
        if(pass1.value=="") pass1.focus();
        if(email.value=="") email.focus();
        if(prenom.value==""){prenom.focus();}
        if(id.value==""){id.focus();}
        

        
        flag =false;
      }
      if(pass1.value!=pass2.value)
      {
        p.style.display="block";
        p.innerText="Mot Pass doit etre la même ";
        pass2.focus();
        alert("Mot Pass doit etre la même");
       
        flag =false;
      }
      var check=document.getElementById("form2Example3c");
      if(!check.checked)
      {
        p.style.display="block";
        p.innerText="Doit accepter les terms";
        alert("Doit accepter les terms");
        flag=false;
      }
    



      return flag;
    }
      
        
        // function for increment button on Panel

        function incrementValue(e) {
          e.preventDefault();
          var fieldName = $(e.target).data('field');
          var parent = $(e.target).closest('div');
          var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
          if (!isNaN(currentVal)) {
              parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
          } else {
              parent.find('input[name=' + fieldName + ']').val(0);
          }
      }
  
      function decrementValue(e) {
          e.preventDefault();
          var fieldName = $(e.target).data('field');
          var parent = $(e.target).closest('div');
          var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
  
          if (!isNaN(currentVal) && currentVal > 0) {
              parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
          } else {
              parent.find('input[name=' + fieldName + ']').val(0);
          }
      }
  
      $('.input-group').on('click', '.button-plus', function(e) {
          incrementValue(e);
      });
  
      $('.input-group').on('click', '.button-minus', function(e) {
          decrementValue(e);
      });
  /*----------------------------------- Panel ---------------------------------*/

  /* Function For Change total price when quantity changes*/

function valide()
{
  var date=getElementById("da")
  var reg=new RegExp("");
}