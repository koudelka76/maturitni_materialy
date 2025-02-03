//
// Created by koudelkad on 24.04.2024.
//

#include "vodafone.h"
#include <string>
#include <iostream>
using namespace std;


MobilniSluzba::MobilniSluzba() : nazev("N/A"), cena(0), platnostSmlouvy(0){}

MobilniSluzba::MobilniSluzba(const string &nazev, double cena, int platnostSmlouvy) : nazev(nazev), cena(cena),
                                                                            platnostSmlouvy(platnostSmlouvy) {}

const string &MobilniSluzba::getNazev() const {
    return nazev;
}

void MobilniSluzba::setCena(double cena) {
    MobilniSluzba::cena = cena;
}

void MobilniSluzba::vypisInformace() {
    cout << "název služby: " << nazev << endl;
    cout << "cena: " << cena << endl;
    cout << "platnost smlouvy: " << platnostSmlouvy << endl;
}

bool MobilniSluzba::jeDlouhodoba() {
    if(platnostSmlouvy>24){
        return true;
    }else{
        return false;
    }
}

InternetovaSluzba::InternetovaSluzba(const string &nazev, double cena, int platnostSmlouvy, int rychlostInternetu)
        : MobilniSluzba(nazev, cena, platnostSmlouvy), rychlostInternetu(rychlostInternetu) {}

int InternetovaSluzba::getRychlostInternetu() const {
    return rychlostInternetu;
}

void InternetovaSluzba::vypisInformace() {
    MobilniSluzba::vypisInformace();
    cout << "rychlost internetu: " << rychlostInternetu << endl;
}
