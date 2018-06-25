#include <iostream>

using namespace std;

class Sensor {

protected:
    int data;

public:
    Sensor (int data) {
        this->data = data;
    }
    //хранение данных
    void storageData (int data){
       //obtainig some data and save in
       this->data = data;
    }
    //обработка данных
    virtual void action (){
        cout << this->data;
        //some action: alert, move, stop, switching, blink.
    }
};

class IK_Sensor : public Sensor {
public:
    void action(){
        cout << data;
    }
};

int main()
{
    Sensor pressureSensor(1);
    pressureSensor.action();

    IK_Sensor device();
    device.action();
}
