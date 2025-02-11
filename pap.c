#include "rims.h"

// Function to create a delay in milliseconds using a simple loop
void Wait(unsigned int milliseconds)
{
    unsigned int i, j;
    for (i = 0; i < milliseconds; i++) {
        for (j = 0; j < 1000; j++) {
            // Empty loop to create a time delay
            // This loop will approximately take 1 millisecond
            // Adjust the inner loop count to fine-tune the delay
        }
    }
}

void main()
{
    // Configure B0 as an output pin (assuming rims.h takes care of this)
    // Your microcontroller might require setting the direction of the pin, 
    // depending on the platform, e.g., something like:
    // B0_direction = 1; // 1 for output

    while(1)
    {      
        B0 = 1;  // Turn ON the LED connected to B0
        Wait(500);  // Wait for 500 milliseconds
        B0 = 0;  // Turn OFF the LED
        Wait(500);  // Wait for 500 milliseconds
    }
}
