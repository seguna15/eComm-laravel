@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-md-10">
        <table class="table">
           
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount </td>
                    <td>$ {{$total + 10}}</td>
                </tr>
            </tbody>
        </table>

        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea type="text" name="address" placeholder="enter your address" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Payment Method</label> <br><br>
                    <input type="radio" name="payment" value="cash" id=""><span>online payment</span> <br><br>
                    <input type="radio" name="payment" value="cash" id=""><span>EMI payment</span> <br><br>
                    <input type="radio" name="payment" value="cash" id=""><span>Payment on Delivery</span> <br><br>
                </div>
              
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
   </div>
</div>
@endsection