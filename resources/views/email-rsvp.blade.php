<p>Someone RSVP'd</p>

Coming to the wedding: {{ $rsvp->confirmation ? 'yes' :'no'}}<br/>
Name: {{ $rsvp->name }}<br/>
Email: {{ $rsvp->email }}<br/>
Food allegies: {{ $rsvp->food_allergy ? 'yes' : 'no'}}<br/>
@if ($rsvp->food_allergy)
    , {{ nl2br($rsvp->food_allergy_spec) }}<br/>
@endif
Vegatarian: {{ $rsvp->vegetarian ? 'yes' : 'no'}}<br/>
@if ($rsvp->dance_request)
Dance request: {{ nl2br($rsvp->dance_request) }}<br/>
@endif
Plus-one: {{ $rsvp->plus_one ? 'yes' : 'no' }}
