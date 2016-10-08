<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class BeforeMiddleware
{

    public function handle($request, Closure $next)
    {
        $mail = DB::table('mailconfigs')->first();
        $config = array(
            'driver' => $mail->driver,
            'host' => $mail->host,
            'port' => $mail->port,
            'from' => array('address' => $mail->adress, 'name' => $mail->name),
            'encryption' => $mail->encryption,
            'username' => $mail->username,
            'password' => $mail->password,
            'sendmail' => '/usr/sbin/sendmail -bs',
            'pretend' => false
        );

        Config::set('mail',$config);

        // extract config
        extract(Config::get('mail'));

        // create new mailer with new settings
        $transport = Swift_SmtpTransport::newInstance($host, $port);
        // set encryption
        if (isset($encryption)) $transport->setEncryption($encryption);
        // set username and password
        if (isset($username))
        {
            $transport->setUsername($username);
            $transport->setPassword($password);
        }
        // set new swift mailer
        Mail::setSwiftMailer(new Swift_Mailer($transport));
        // set from name and address
        if (is_array($from) && isset($from['address']))
        {
            Mail::alwaysFrom($from['address'], $from['name']);
        }
        return $next($request);
    }
}
