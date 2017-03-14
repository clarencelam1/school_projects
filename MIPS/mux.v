`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module mux#(parameter W = 32)
(

 input [W-1:0] A_in, B_in,
 input 				  sel_in,
 output [W-1:0]     Out_out
);		


assign Out_out = (sel_in) ? B_in : A_in;


endmodule