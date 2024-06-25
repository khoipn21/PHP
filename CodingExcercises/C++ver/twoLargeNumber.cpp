#include <iostream>
#include <string>
#include <algorithm>

using namespace std;

string findSum(string num1, string num2)
{
    if (num1.empty() && num2.empty())
    {
        return "0";
    }

    if (num1.length() > num2.length())
    {
        swap(num1, num2);
    }

    int n1 = num1.length();
    int n2 = num2.length();
    int diff = n2 - n1;

    string result = "";
    int carry = 0;

    for (int i = n1 - 1; i >= 0; i--)
    {
        int sum = (num1[i] - '0') + (num2[i + diff] - '0') + carry;
        result.push_back(sum % 10 + '0');
        carry = sum / 10;
    }

    for (int i = diff - 1; i >= 0; i--)
    {
        int sum = (num2[i] - '0') + carry;
        result.push_back(sum % 10 + '0');
        carry = sum / 10;
    }

    if (carry)
        result.push_back(carry + '0');
    reverse(result.begin(), result.end());

    return result;
}

int main()
{
    string num1 = "123456789";
    string num2 = "987654321";
    cout << findSum(num1, num2);
    return 0;
}