<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "<center><h2> WELCOME </h2><br> 
        <a href='https://www.educastudio.com/contact-us'>Contact Us</a></center>";
    }

    public function about()
    {
        return 'NIM : 2141720040 <br> NAMA : Kurniawati Agustina';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Halaman Artikel dengan ID ' .$id;
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

    //public function news()
    //{
        //echo" Tampilkan Link Product <br>
        
          //  <ul>
            //    <li>
              //  <a href='https://www.educastudio.com/news'>Berita 1</a>
                //</li>
                //<li>
                  //  <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19'>Berita 2</a>
                //</li>
                
            //</ul>
       // ";

       public function news(){
        echo " Menampilkan Daftar berita
        <ul>
            <li>
                <a href='https://www.educastudio.com/news'>Berita 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>Berita 2</a>
            </li>
        </ul>";
    }

    public function aboutus(){
        echo " <h1>Menampilkan About Us</h1>
        <a href='https://www.educastudio.com/about-us'>About Us</a>";

    }

    public function contact(){
        echo "<h1>Menampilkan Contact Us</h1>
        <a href='https://www.educastudio.com/contact-us'>Contact Us</a>";
    }

    



    public function program()
    {

        echo " Menampilkan Daftar Program
        <ul>
            <li>
                <a href='https://www.educastudio.com/program/karir'>Program 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/magang'>Program 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a>
            </li>
        </ul>";
    }
}
