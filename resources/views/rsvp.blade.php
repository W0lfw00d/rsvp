@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">RSVP: 06-AUG-2016</div>
                    <div class="panel-body">
                        <img src="images/HJ-Viv.jpg" class="img-thumbnail img-responsive" alt="Responsive image">
                        <p>
                            Dear Family & Friends!<br/>
                            <br/>
                            We are getting married on the 6th of August 2016!
                            We would like to celebrate this day with you,
                            therefore we hope you can come to our wedding.<br/>
                            <br/>
                            Cheers,<br/>
                            Henk-Jelle & Qianwei (Vivienne)
                        </p>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/thankyou') }}">
                            {{ csrf_field() }}
                            <div id="guestForm" class="guest-form">
                                <input type="hidden" name="guests[]" />
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">So you're coming right?</label>

                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="1" id="confirmation1" name="confirmation"
                                                       checked="checked" />
                                                Of course!
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="0" id="confirmation0" name="confirmation"/>
                                                Sadly, no. But next time for sure!
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">
                                        Would you like a vegetarian dinner?
                                    </label>
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="vegetarian" value="1"/> Yes, please.
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="food_allergy"
                                                       value="1"
                                                       role="button"
                                                       data-toggle="collapse"
                                                       data-target="#collapseFoodAllergy"
                                                       aria-expanded="false"
                                                       aria-controls="collapseFoodAllergy"/> I have food allergies
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse form-group{{ $errors->has('food_allergy_spec') ? ' has-error' : '' }}"
                                     id="collapseFoodAllergy">

                                    <div class="col-md-6 col-md-offset-4">
                                        <textarea id="food_allergy_spec" name="food_allergy_spec" type="text"
                                                  class="form-control"
                                                  rows="3">{{ old('food_allergy_spec') }}</textarea>

                                    <span for="food_allergy_spec" class="help-block">
                                        If you have any food allergies, please indicate what they are in the field
                                        above.
                                        Or, if you just want to send us a note, please feel free. If you have any
                                        questions, please
                                        send us an email.
                                    </span>
                                        @if ($errors->has('food_allergy_spec'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('food_allergy_spec') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('dance_request') ? ' has-error' : '' }}">
                                    <label for="dance_request" class="col-md-4 control-label">
                                        Music request
                                    </label>

                                    <div class="col-md-6">
                                        <input id="dance_request" type="text" class="form-control"
                                               name="dance_request" value="{{ old('dance_request') }}"/>
                                        @if ($errors->has('dance_request'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('dance_request') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div id="removeGuest" class="form-group remove-guest-parent">
                                    <div class="col-md-6 col-md-offset-4">
                                        <a class="btn btn-default remove-guest" href="#" role="button" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remove this guest
                                        </a>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group hide">
                                <div class="col-md-6 col-md-offset-4">
                                    <a id="addGuest" class="btn btn-default" href="#" role="button" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add a guest
                                    </a>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary alert alert-link">
                                        <i class="fa fa-btn glyphicon glyphicon-envelope"></i> Send confirmation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
