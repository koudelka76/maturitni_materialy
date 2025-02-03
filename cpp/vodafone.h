//
// Created by koudelkad on 24.04.2024.
//

#ifndef VODAFONE_VODAFONE_H
#define VODAFONE_VODAFONE_H

#include <string>
#include <iostream>
using namespace std;

class MobilniSluzba {
protected:
    string nazev;
    double cena;
    int platnostSmlouvy;
public:
    MobilniSluzba();
    MobilniSluzba(const string &nazev, double cena, int platnostSmlouvy);

    const string &getNazev() const;
    void setCena(double cena);

    void vypisInformace();
    bool jeDlouhodoba();
};

class InternetovaSluzba: public MobilniSluzba{
private:
    int rychlostInternetu;
public:
    InternetovaSluzba(const string &nazev, double cena, int platnostSmlouvy, int rychlostInternetu);

    int getRychlostInternetu() const;

    void vypisInformace() ;
};

#endif //VODAFONE_VODAFONE_H
