@extends('layouts.main')

@section('title',"Contact")
    

@section('content')
<style>

</style>
    <h5 class="center-align" style="font-famly: Segoe UI;font-weight: 300;font-size:30px;">HUBUNGI KAMI</h5>
    <hr class="style-one" style="margin-bottom:79px;">

    <p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Culpa ad reiciendis blanditiis similique fuga dolorum. 
            Repudiandae asperiores aut officia id cum iste deserunt, natus ex est explicabo. In, ipsam, accusamus.</p>
            
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input id="icon_email" type="email" class="validate">
                      <label for="icon_email">Email</label>
                    </div>
                  </div>
                </form>
              </div>
@endsection