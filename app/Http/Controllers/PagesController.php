<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //     public function home()
    //     {
    //         return view('home',['teks' => 'Welcome To Berada Kurniawati Agustina']);

    //     }
    // }

    //  

    // {
    //     public function product(){
    //         return view('product',
    //         ['products' => 'Products list Kurniawati Agustina<br>
    //         <ol>
    //         <li><a href="https://www.educastudio.com/category/marbel-edu-games">Marbel Edugame</a></li>
    //         <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel And Friends Kids Games</a></li>
    //         <li><a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a></li>
    //         <li><a href="https://www.educastudio.com/category/kolak-kids-songs">Marbel kids Songs</a></li>
    //         </ul>']);



    //     }
    // }

    public function news()
    {
        return view(
            'news',
            ['berita' => 'Menampilkan Daftar Berita <br>
        <ul>
                <li>
                    <a href="https://www.educastudio.com/news ">Berita Mengenai educastudio programmer</a>
                </li>
                <li>
                    <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Berita berbagi untuk warga sekiar terdampak covid-19</a>
                </li>
            </ul> ']
        );
    }

    public function program(){
        return view(
            'program',
            ['programs' => 'Menampilkan informasi mengenai Program <br>
            <ol>
         <li><a href="https://www.educastudio.com/program/karir">Program Karir</a></li>
         <li><a href="https://www.educastudio.com/program/magang">Program Magang</a></li>
        <li><a href="https://www.educastudio.com/program/kunjungan-industr">Program Kunjungan Industri</a></li>
       
          </ul>']);

        }

        public function aboutus(){
            return view(
                'about-us',
                ['About' => 'About Us <br>
                <ol>
             <li><a href="https://www.educastudio.com/about-us">About Us</a></li>
            
              </ul>']);
    
            }

            public function index(){
                return view(
                    'contact-us',
                    ['Contact' => 'Contact  <br>
                    <ol>
                 <li><a href="https://www.educastudio.com/contact-us">Contact</a></li>
                
                  </ul>']);
        
                }


    }


       

