`timescale 1ns / 1ps
/*
 * CSE141L Lab1: Be a Hardware Hacker!
 * University of California, San Diego
 * 
 * Written by Donghwan Jeon, 4/1/2007
 */
 
module store_bytes
(

 input [31:0] 			A_in,
 input [5:0]			opcode,
 input [1:0]			shift_amount,
 output reg [31:0]     Out_out
);		

always @(*)
	begin
	
	if(opcode == 6'b101000)
		begin
			case(shift_amount[1:0])
  
			2'b00:  
				begin
					Out_out = {24'd0, A_in[7:0]};
				end
				
			2'b01:  
				begin
					Out_out = {24'd0, A_in[15:8]};
				end
				
			2'b10:  
				begin
					Out_out = {24'd0, A_in[23:16]};
				end
				
			2'b11:  
				begin
					Out_out = {24'd0, A_in[31:24]};
				end
			default:
				begin
					Out_out = {32'bxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx};
				end
			endcase
		end		
	else
		begin  
			case(shift_amount[1:0])
			2'b00:  
				begin
					Out_out = {16'd0, A_in[15:0]};
				end
				
			2'b10:  
				begin
					Out_out = {16'd0, A_in[31:16]};
				end
			default:
				begin
					Out_out = {32'bxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx};
				end
			endcase
		end
	end
	
endmodule