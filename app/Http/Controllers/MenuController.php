<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Menu;
use App\Order;
use Session;
use App\Http\Requests;
use Stripe\Charge;
use Stripe\Stripe;
use Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=> 'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image']=$imageName;
        }
        Menu::create($formInput);
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCartItem(Request $request, $id){
        $menu = Menu::find($id);
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addItemsToCart($menu, $menu->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('shop.index');
    }

    public function getItemFromCart(){
        if(!Session::has('cart')){
            return view('shop.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.cart', ['menus'=>$cart->menuItems, 'totalPrice'=>$cart->totalPrice]);
    }

    public function display(){
        $menus = Menu::all();
        
        return view('shop.index', compact('menus'));
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total'=>$total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('shop.cart');     
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_woLLpl2OZLt8FHgmkJzEJPcV');
        try{
            $charge = Charge::create(array(
                "amount"=>$cart->totalPrice * 100,
                "currency"=>"usd",
                "source"=>$request->input('stripeToken'),
                "description"=>"Test Charge"
            ));
            $order = new Order();
            $order->cart = base64_encode(serialize($cart));
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;
          
            Auth::user()->orders()->save($order);
        }catch(\Exception $e){
            return redirect()->route('checkout')->with('error',$e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('shop.index')->with('success', 'Your order have been successfully submitted!!!');

    }
}
