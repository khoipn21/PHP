#include <iostream>
#include <string>

using namespace std;

bool isDigit(char digit)
{
    int val = digit - '0';
    return (val < 10 && val >= 0);
}

int convertToDec(string num, int base)
{
    int val = 0;
    for (char digit : num)
    {
        val = val * base + (isDigit(digit) ? digit - '0' : digit - 'A' + 10);
    }
    return val;
}

string convertDecToBase(int dec, int base)
{
    string res = "";
    if (base == 1)
    {
        for (int i = 0; i < dec; i++)
            res.push_back('1');
        return res;
    }
    while (dec != 0)
    {
        int digit = dec % base;
        char temp = ((digit >= 10 ? digit - 10 + 'A' : digit + '0'));
        res = temp + res;
        dec /= base;
    }
    return res;
}

string processResult(string input)
{
    size_t pos1 = input.find(' ');
    size_t pos2 = input.find(' ', pos1 + 1);
    string n = input.substr(0, pos1);
    int x = stoi(input.substr(pos1 + 1, pos2 - pos1 - 1));
    int y = stoi(input.substr(pos2 + 1));

    if (x <= 0 || y <= 0)
        return "Error: Input base and output base must greater than 0!!!";

    int dec;
    if (x != 10)
    {
        dec = convertToDec(n, x);
        if (y == 10)
            return to_string(dec);
    }
    else
        dec = stoi(n);

    return convertDecToBase(dec, y);
}

int main()
{
    cout << processResult("10 10 2") << endl;
    cout << processResult("1024 8 10") << endl;
    cout << processResult("101101 2 16") << endl;
    return 0;
}