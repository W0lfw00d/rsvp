<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\RSVP;
use Mail;


class RSVPController extends Controller {

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request) {
    $this->validate($request, [
      'name' => 'required|max:255',
      'email' => 'email'
    ]);

    $rsvp = new RSVP;
    $rsvp->name = $request->name;
    $rsvp->email = $request->email;
    $rsvp->food_allergy = $request->food_allergy;
    $rsvp->food_allergy_spec = $request->food_allergy_spec;
    $rsvp->vegetarian = $request->vegetarian;
    $rsvp->dance_request = $request->dance_request;
    $rsvp->plus_one = $request->plus_one;
    $rsvp->confirmation = $request->confirmation;
    $rsvp->code = str_random(10);;
    if ($rsvp->save()) {
      /*
       * TODO:
       *  - send thank you to guest
       *  - Save extra guests
       */
      $this->sendEmailConfirmation($rsvp);
      return redirect('/thankyou');
    }
    else {
      return 'error!';
    }

  }

  /**
   * Send an e-mail confirmation to the admin.
   *
   * @param  Request $request
   * @param  int $id
   * @return Response
   */
  public function sendEmailConfirmation(RSVP $rsvp) {

    Mail::send('email-rsvp', ['rsvp' => $rsvp], function ($m) use ($rsvp) {
      $m->from('info@rsvp.dev', 'RSVP');

      $m->to(env('MAIL_ADMIN'), 'Impending newly weds')
        ->subject('Someone RSVP\'ed!');
    });
  }


  /**
   * Send an e-mail confirmation to the admin.
   *
   * @param  Request $request
   * @param  int $id
   * @return Response
   */
  public function sendEmailGuest(RSVP $rsvp) {

    Mail::send('email-rsvp', ['rsvp' => $rsvp], function ($m) use ($rsvp) {
      $m->from('info@rsvp.dev', 'RSVP');

      $m->to($rsvp->email, $rsvp->name)
        ->subject('RSVP');
    });
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return Response
   */
  public function edit($id) {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   * @return Response
   */
  public function update($id) {

  }
}

?>
