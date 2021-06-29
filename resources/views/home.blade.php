@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div ><h1 class="mt-5 mb-5">Requested Quotes</h1></div>
        <div class="col-md-12 table-resposnive">
          <table class="table table-striped" id="myTable1">
          <thead>
          <tr>
          <th>Id</td>
          <th>First Name</td>
          <th>Last Name</td>
          <th>Email</td>
          <th>Rooms</td>
          <th>Phone Number</td>
          <th>Current Address</td>
          <th>New Address</td>
          <th>Date</td>
          </tr>
          </thead>
          <tbody>
          @foreach($quotes as $quote)
          <tr>
          <td>{{$quote['id']}}</td>
          <td>{{$quote['firstName']}}</td>
          <td>{{$quote['lastName']}}</td>
          <td>{{$quote['email']}}</td>
          <td>{{$quote['rooms']}}</td>
          <td>{{$quote['phoneNumber']}}</td>
          <td>{{$quote['currentAddress']}}</td>
          <td>{{$quote['newAddress']}}</td>
          <td>{{$quote['date']}}</td>
         
          </tr>
          @endforeach
          </tbody>
          <tfoot></tfoot>
          </table>
        </div>
    </div>
</div>
@endsection

