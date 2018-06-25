#include <iostream>
#include <fstream>
#include <string.h>

using namespace std;

int truckMass(string path, int truckNum);

int main()
{
    string mass, line, truck;

    ifstream myfile ("D:\\Projects\\table.txt");
    if (myfile.is_open()){
        while (myfile != NULL){
            getline(myfile, line);
            //недопарсинг, т.к. strtok и strtok_r не сработали
            //18-24 - truck N
            for (int i = 18; i <= 24; i++){
                //промежуточная переменная для сравнений
                truck += line[i];

                if (truck == "truck 2"){
                    ofstream fout("truck2_data.txt", ios_base::app);
                    fout << line << "\n";
                    fout.close();
                    truck = "";
                } else if (truck == "truck 3") {
                    ofstream fout("truck3_data.txt", ios_base::app);
                    fout << line << "\n";
                    fout.close();
                    truck = "";
                } else if (truck == "truck 1") {
                    ofstream fout("truck1_data.txt", ios_base::app);
                    fout << line << "\n";
                    fout.close();
                    truck = "";
                }
            } // конец for
        } // конец while

    }  myfile.close();

    // дописываем массы
    ofstream fout("truck1_data.txt", ios_base::app);
    int a = truckMass("truck1_data.txt", 1);
    fout << "\t\t" << "Total mass is: " << a;
    fout.close();

    ofstream fout1("truck2_data.txt", ios_base::app);
    int b = truckMass("truck2_data.txt", 2);
    fout1 << "\t\t" << "Total mass is: " << b;
    fout1.close();

    ofstream fout2("truck3_data.txt", ios_base::app);
    int c = truckMass("truck3_data.txt", 3);
    fout2 << "\t\t" << "Total mass is: " << c;
    fout2.close();

    return 0;
}

int truckMass(string path, int truckNum){

    int truckTotalMass=0, truckMass=0, j=0;
    string mass, line;

    ifstream repFile (path);
    if (repFile.is_open()){
        while (repFile){
            getline(repFile, line);
            //27-31 - truckMass
            for (int i = 27; i <= 31; i++){
                mass += line[i];

                if (i == 31){
                    truckMass = atoi(mass.c_str());
                    truckTotalMass += truckMass;
                    mass = "";
                    // хотфикс. Цикл делает лишний шаг.
                    j++;
                    if (j == 4 && truckNum == 1){
                        truckTotalMass -= 17800;
                    } else if (j == 5 && truckNum == 3){
                        truckTotalMass -= 14300 * 2;
                    } else if (j == 3 && truckNum == 2){
                        truckTotalMass -= 11050;
                    }
                    cout << truckMass << "\t" << truckTotalMass << "\n";
                    truckMass = 0;
                }
            }
        } repFile.close();
    } return truckTotalMass;
}


