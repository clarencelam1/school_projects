`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module sign_extend
(

 input [15:0] extend_in,
 input 				  sign,
 output [31:0]     extended_out
 
);


assign extended_out[31:0] =  (sign) ? {{16{extend_in[15]}}, extend_in[15:0] } : {{16{1'b0}}, extend_in[15:0]};


endmodule