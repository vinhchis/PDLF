<!-- Extends template page from includes directory-->
@extends('includes.app')
<style>
table td{
  padding-bottom: 10px;
}
</style>

<!-- Specify content -->
@section('content')
<h1>{{$title}}</h1>
<form>
 <table width='100%'>
   <tr>
    <td>Name</td>
    <td><input type='text' class='form-control' name='name'></td>
   </tr>
   <tr>
    <td>Subject</td>
    <td><input type='text' class='form-control' name='subject'></td>
   </tr>
   <tr>
    <td>Content</td>
    <td><textarea class='form-control' name='content'></textarea></td>
   </tr>
   <tr>
    <td></td>
    <td><input type='button' class='btn btn-info' value='Submit' ></td>
   </tr>
 </table>
</form>
@stop