import 'package:carousel_slider/carousel_slider.dart';

import 'package:flutter/material.dart';
import 'package:flutter/material.dart';

final List<String> imgList = [
  'https://images.unsplash.com/photo-1520342868574-5fa3804e551c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6ff92caffcdd63681a35134a6770ed3b&auto=format&fit=crop&w=1951&q=80',
  'https://images.unsplash.com/photo-1522205408450-add114ad53fe?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=368f45b0888aeb0b7b08e3a1084d3ede&auto=format&fit=crop&w=1950&q=80',
  'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=94a1e718d89ca60a6337a6008341ca50&auto=format&fit=crop&w=1950&q=80',
  'https://images.unsplash.com/photo-1523205771623-e0faa4d2813d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=89719a0d55dd05e2deae4120227e6efc&auto=format&fit=crop&w=1953&q=80',
  'https://images.unsplash.com/photo-1508704019882-f9cf40e475b4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8c6e5e3aba713b17aa1fe71ab4f0ae5b&auto=format&fit=crop&w=1352&q=80',
  'https://images.unsplash.com/photo-1519985176271-adb1088fa94c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a0c8d632e977f94e5d312d9893258f59&auto=format&fit=crop&w=1355&q=80'
];

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        backgroundColor: Color.fromRGBO(26, 29, 27, 100),
        appBar: AppBar(
          centerTitle: true,
          backgroundColor: Color.fromRGBO(26, 29, 27, 1),
          title: const Text('thuisgemaakt',
              style: TextStyle(
                color: Color.fromRGBO(0, 247, 136, 0.612),
              )),
        ),
        body: Center(
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.center,
            children: [
              const Padding(
                padding: EdgeInsets.symmetric(vertical: 30),
                child: Text(
                  "Gerecht van de maand",
                  style: TextStyle(
                      color: Color.fromRGBO(0, 247, 136, 0.612), fontSize: 30),
                ),
              ),
              Stack(
                alignment: Alignment.bottomCenter,
                children: [
                  Image.asset(
                    'image/brandweerpasta.png',
                    width: double.infinity,
                    fit: BoxFit.cover,
                  ),
                  Container(
                    alignment: Alignment.bottomCenter,
                    child: Container(
                        padding: const EdgeInsets.all(8.0),
                        child: const Text(
                          'Text Over the Image',
                          style: TextStyle(
                            color: Colors.black,
                            fontWeight: FontWeight.bold,
                            fontSize: 22.0,
                          ),
                        )),
                  ),
                ],
              ),
              Column(
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Container(
                    padding: EdgeInsets.all(20.0),
                    child: const Text("reviews van de week",
                    style: TextStyle(color: Color.fromRGBO(0, 247, 136, 0.612),fontSize: 30 ),),
                    
                  ),
              
                  CarouselSlider(
                    options: CarouselOptions(
                      height: 250.0,
                      autoPlay: true,
                      autoPlayInterval: Duration(seconds: 3),
                      autoPlayAnimationDuration: Duration(milliseconds: 800),
                      autoPlayCurve: Curves.fastOutSlowIn,
                      enlargeCenterPage: true,
                      scrollDirection: Axis.horizontal,
                    ),
                    items: imgList
                        .map((item) => Container(
                              child: Center(
                                  child: Image.network(item,
                                      fit: BoxFit.cover,
                                      width: 500.0,
                                      height:350,
                                      )),
                            ))
                        .toList(),
                  ),
                ],
              ),
            ],
          ),
        ),
      ),
    );
  }
}
