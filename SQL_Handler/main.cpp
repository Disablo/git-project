#include <iostream>
//#include <mysql.h>

using namespace std;
using namespace sql;

int main()
{
    sql::Driver *driver;
    sql::Connction *con;
    sql::Statement *stmt;
    sql::Resultset *res;

    string name;
    const char* server = "";
    const char* user = "";
    const char* password = "";
    const char* database = "";

    //try to establish connection
    driver = ger_driver_instance();
    con = driver->connect(server, user, password);

    //connect to sql database
    con->setSchema(database);

    //try to query the database
    stmt = con->createStatement();
    res = stmt->executeQuery("SELECT * FROM card");

    //obtain worker
    cout << "Enter the name: " << endl;
    cin >> name;
    while (res->next()) {
        if (name == res->getString("name")){
            int id = res->getInt("id");
        }
    }

    //clear results
    delete res;

    res = stmt->executeQuery("SELECT * FROM archive");
    while (id != card_id) res->next();

    int time = res->getInt("time");

    cout << time;

    delete res;
    delete stmt;
    delete con;

    return 0;

}
