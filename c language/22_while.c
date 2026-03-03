/*write a program to printf the following pattern.
1,3,5,7,9................99
create variable number
number=1;
print number(3)=number(1)+2;
print number(5)=number(3)+2;
print number(7)=number(5)+2;
  */
  #include<stdio.h>
  void main()
  {
    int number;
    number=1;
    while(number<=99)
    {
        printf("%5d",number);
        number=number+2;
    }
    printf("%d",number);

  }
