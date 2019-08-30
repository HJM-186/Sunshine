<!-- /resources/views/alert.blade.php -->
<div>
   <table>
       <tr class="jumbotron">
           <td>
               <img src="images/village.jpg" style="height:30%;width:60%;margin:20 0% 20 17%">
           </td>
           <td>
               <p style="font-family: 'Droid Serif';font-size:120%;margin-left:-35%;margin-right:10%">
                   <span style="font-size: 240%"><b>L</b></span>ocated on the border of Transylvania<br>
                   and Wallachia in Romania is the impressive Bran Castle.<br>
                   Near the village of Bran and close to the city of Brasov,<br>
                   the fortress commands attention as it rises over the Bran Gorge,<br>
                   a historically strategic pass through the Carpathians.<br>
                   Dubbed “Dracula’s Castle,” it is a striking destination<br>
                   and provides visitors with a fantastic glimpse into the past:
               </p>
           </td>
       </tr>
   </table>
    {{ $slot }}
</div>


{{--sweetalertmessage--}}
