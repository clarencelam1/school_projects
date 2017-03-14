`timescale 1ns / 1ps

/*
 * CSE141L Lab1: Tools of the Trade
 * University of California, San Diego
 * 
 * Written by Matt DeVuyst, 3/30/2010
 * Modified by Vikram Bhatt, 30/3/2010
 * Modified by Adrian Caulfield, 1/8/2012
 */

//
// NOTE: This verilog is non-synthesizable.
// You can only use constructs like "initial", "#10", "forever"
// inside your test bench! Do not use it in your actual design.
//

module test_mux#(parameter W = 8);

   reg          clk;
   reg  [W-1:0] a_r;
   reg  [W-1:0] b_r;
	reg  sel;
   wire [W:0] sum;

   // The design under test is our adder
   mux dut (   .A_in(a_r)
	        ,.B_in(b_r)
	        ,.sel_in(sel)
                ,.Out_out(sum)
             );

   // Toggle the clock every 10 ns

   initial
     begin
        clk = 0;
        forever #10 clk = !clk;
     end

   // Test with a variety of inputs.
   // Introduce new stimulus on the falling clock edge so that values
   // will be on the input wires in plenty of time to be read by
   // registers on the subsequent rising clock edge.
   initial
     begin
        a_r = 3;
        b_r = 2;
		  sel = 0;
        @(negedge clk);
        a_r = 3;
        b_r = 2;
		  sel = 1;
     end // initial begin

endmodule // test_adder
