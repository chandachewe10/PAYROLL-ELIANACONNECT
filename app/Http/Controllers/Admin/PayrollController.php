@extends('layouts.account')

@section('content')




<div>
    


  
  
    <table id="referals" class="table table-bordered mt-5">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Marital Status</th>
                <th>Image-ID(s)</th>
                <th>Channel</th>
                <th>Insurance Type</th>
                @role('user')
                <th>Status</th>
                @endrole
               
               
            </tr>
        </thead>
        <tbody>
            @foreach($referals as $referal)
            <tr>
               
                <td>{{ $referal->client_name ?? '' }}</td>
                <td>{{ $referal->client_email ?? '' }}</td>
                <td>{{ $referal->client_phone ?? '' }}</td>
                <td>{{ $referal->client_address ?? '' }}</td>
                <td>
                @if($referal->client_marital_status ?? '')
                @if($referal->client_marital_status == 1)
                Single
                @elseif($referal->client_marital_status == 2)
               Married
                @elseif($referal->client_marital_status == 3) 
                Divorced
                 @elseif($referal->client_marital_status == 4)
                 Widowed
                  @elseif($referal->client_marital_status == 5)
                  Seprated
                  @else
                  N/A
                @endif
                
                </td>
              
              <td>
          @if($referal->front_image )      
          <span style="color:royalblue; font-weight:bold"> {{$referal->front_image ?? 'NONE'}} </span><br>
           @endif
           @if($referal->back_image ?? '')   
          <span style="color:royalblue; font-weight:bold"> {{$referal->back_image}} </span><br>
           @endif 
           @if($referal->right_image ?? '')    
          <span style="color:royalblue; font-weight:bold"> {{$referal->right_image}} </span><br>
           @endif 
           @if($referal->left_image ?? '')   
          <span style="color:royalblue; font-weight:bold"> {{$referal->left_image}}</span><br>
           @endif 
           @if($referal->chassis_number ?? '')   
         <span style="color:royalblue; font-weight:bold"> {{$referal->chassis_number}}</span><br> 
           @endif 
           @if($referal->mileage ?? '')   
        <span style="color:royalblue; font-weight:bold">  {{$referal->mileage}}</span><br>
          @endif 
          @if($referal->white_book ?? '')   
         <span style="color:royalblue; font-weight:bold">   {{$referal->white_book}}  </span><br>
           @endif   
                
      </td>
             
               
                
                
                <td>WHATSAPP-CHATBOT</td>
                <td><a href="">{{ $referal->insurance_type }}</a></td>
                @role('user')
                <td>{{ $referal->status == 0 ? 'Pending' : 'Approved' }}</a></td>
                @endrole
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>   
$(document).ready( function () {
    $.noConflict();
    $('#referals').DataTable({
       
        dom: 'Bfrtip',
     
        buttons: [
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5]
                }
            },
          
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5]
                }
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5]
                }
            },
            
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5]
                }
            
            },
            'colvis'
        ]
       
    });
});
</script>


@endsection