<?php

namespace App\Http\Controllers;

use App\Models\Counteragent;
use Dotenv\Validator;
use Illuminate\Http\Request;

class CounteragentControllerAjax extends Controller
{
    private $response;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $this->response = ( new Counteragent() )->hydrate(
                \DB::select(
                    'call select_counteragents( 1 )'
                )
            );
        }
        catch(\Exception $e)
        {
            $this->response = [ $e->getMessage(), $e->getCode() ] ;
        }
        finally
        {
            return $this->response;
        }
    }


    /**
     * Add the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request )
    {
        try
        {
            $request->validate([
                'name'      => [ 'required' ],
                'phone'     => [ 'required' ],
                'address'   => [ 'required' ],
                'status'    => [ 'required' ]
            ]);

            $counteragent = \DB::select(
                'call insert_counteragents( ?, ?, ?, ? );',
                [
                    $request->input('name'),
                    $request->input('phone'),
                    $request->input('address'),
                    $request->input('status')
                ]
            );

            $this->response = [ 1, 200 ] ;
        }
        catch ( \Exception $e )
        {
            $this->response = [ $e->getMessage(), $e->getCode() ] ;
        }
        finally
        {
            return response($this->response);
        }
    }

    /** Add the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getOne( Request $request )
    {
        try
        {
            $request->validate([
                'id'      => [ 'required', 'numeric' ]
            ]);

            $this->response = Counteragent::find( $request->input( 'id' ) );
        }
        catch(\Exception $e)
        {
            $this->response = [ $e->getMessage(), $e->getCode() ] ;
        }
        finally
        {
            return $this->response;
        }
    }

    /** Add the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function edit(Request $request )
    {
        try
        {
            $request->validate([
                'id'        => [ 'required', 'numeric' ],
                'name'      => [ 'required' ],
                'phone'     => [ 'required' ],
                'status'    => [ 'required' ]
            ]);

            $counteragent = \DB::select(
                'call update_counteragents( ?, ?, ?, ? );',
                [
                    $request->input('id'),
                    $request->input('name'),
                    $request->input('phone'),
                    $request->input('status')
                ]
            );

            $this->response = [ 1, 200 ] ;
        }
        catch ( \Exception $e )
        {
            $this->response = [ $e->getMessage(), $e->getCode() ] ;
        }
        finally
        {
            return response($this->response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counteragent  $counteragent
     * @return \Illuminate\Http\Response
     */
    public function delete( Request $request )
    {
        try
        {
            $request->validate([
                'id'      => [ 'required', 'numeric' ]
            ]);

            $counteragent = Counteragent::find( $request->input( 'id' ) );

            if( $counteragent ) {
                $counteragent->status = 0;
                $counteragent->save();
            }

            $this->response = [ 1, 200 ] ;
        }
        catch(\Exception $e)
        {
            $this->response = [ $e->getMessage(), $e->getCode() ] ;
        }
        finally
        {
            return $this->response;
        }
    }
}
