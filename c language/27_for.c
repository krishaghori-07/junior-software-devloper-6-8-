/*print the following pattern
*
**
***
****
*****
*/
#include<stdio.h>
void main()
{
    int i,j;
    for(i=1;i<=2;i++)//row
    {
        for(j=1;j<=i;j++)//for column
        {
            printf("*");
        }
        printf("\n");
    }
}