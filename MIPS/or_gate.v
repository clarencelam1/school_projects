`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module or_gate
(
 input A_in, B_in,
 output reg out
);


always@(*)
	begin
		out <= A_in | B_in;
	end

endmodule