module control( 
input [5:0] instruction,
input [5:0] instruction_func_in,
input [4:0] instruction_20_16,

output reg jump_out,

output reg [1:0] size_in,

output reg shift_out,
output reg reg_dest_out,
output reg alu_mux_out,
output reg mem_to_reg_out,
output reg reg_write_out,
output reg mem_read_out,
output reg mem_write_out,
//output reg branch_out,
output reg write_out,
output reg jump_register_out,
output reg jump_and_link_out,
output reg write_register_out,
output reg write_register_data_out,
output reg sign,
output reg [5:0]func_in,
output reg store_byte,
output reg load_byte
);
/*
Func_in     Operation     O_out value     Branch_out     Jump_out
100000     ADD     A+B     0     0
100001     ADD     A+B     0     0
100010     SUB     A-B     0     0
100011     SUB     A-B     0     0
100100     AND     A AND B     0     0
100101     OR     A OR B     0     0
100110     XOR     A XOR B     0     0
100111     NOR     A NOR B     0     0
101000     Set-Less-Than Signed     (signed(A) < signed(B))     0     0
101001     Set-Less-Than Unsigned     (A < B)     0     0
111000     Branch Less Than Zero     A     (A < 0)     0
111001     Branch Greater Than or Equal to Zero     A     (A >= 0)     0
111010     Jump     A     0     1
111011     Jump     A     0     1
111100     Branch Equal     A     (A == B)     0
111101     Branch Not Equal     A     (A != B)     0
111110     Branch Less Than or Equal to Zero     A     (A <= 0)     0
111111     Branch Greater Than Zero     A     (A > 0)     0
*/
//wire [9:0] opcode_func = {instruction, instruction_func_in};
always @(*) begin

	case(instruction[5:0])
  
		6'b100011://     LW     
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				func_in					<= 	6'b100000;  
				jump_out					<=		1'b0;
				size_in  				<=    2'b11;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
        
    6'b101011://     SW     
			begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0;
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b1;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in    				<=    2'b11;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
    

    6'b001000://    ADDI     A+(IMMD)
			begin
            reg_dest_out			<=    1'b0;
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0;
            reg_write_out			<=    1'b1;
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
        
    6'b000000://     R-Type    A+B     0     0
			begin
				
				//ADDU			
				if(instruction_func_in == 6'b100001)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
					
						jump_out					<=		1'b0;
						func_in					<= 	6'b100000;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b0;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
					
				//SUBU
				if(instruction_func_in == 6'b100011)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
					
						jump_out					<=		1'b0;
						func_in					<= 	6'b100010;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b0;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				
				//SLT
				if(instruction_func_in == 6'b101010)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b101000;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//SLTU
				if(instruction_func_in ==  6'b101011)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b101001;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b0;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//sll
				if(instruction_func_in == 6'b000000)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000000;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b1;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//sllv
				else if(instruction_func_in == 6'b000100)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000000;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//srl
				else if(instruction_func_in == 6'b000010)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000010;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b1;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//srlv
				else if(instruction_func_in == 6'b000110)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000010;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//sra
				else if(instruction_func_in == 6'b000011)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000011 ;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b1;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//srav
				else if(instruction_func_in == 6'b000111)
					begin
						reg_dest_out			<=    1'b1;
						alu_mux_out				<=    1'b0;
						mem_to_reg_out			<=    1'b0;
						reg_write_out			<=    1'b1;
						mem_read_out			<=    1'b0;
						mem_write_out			<=    1'b0;
						//branch_out				<=    1'b0;
						jump_out					<=		1'b0;
						func_in					<= 	6'b000011;
						size_in					<=    2'b00;
						write_out				<= 	1'b0;
						jump_register_out		<=    1'b0;
						jump_and_link_out		<=		1'b0;
						write_register_out	<=		1'b0;
						write_register_data_out <=	1'b0;
						shift_out				<=    1'b0;
						sign 						<= 	1'b1;
						store_byte				<=		1'b0;
						load_byte				<=		1'b0;
					end
				//jr and jalr
				else if(instruction_func_in == 6'b001000 || instruction_func_in == 6'b001001)
					begin
					reg_dest_out			<=    1'bx; //x
					alu_mux_out				<=    1'b0;
					mem_to_reg_out			<=    1'b0; //x
					mem_read_out			<=    1'b0;
					mem_write_out			<=    1'b0;
					//branch_out				<=    1'b0;
					jump_out					<=		1'b1;
					func_in					<= 	6'b111011;
					size_in					<=    2'b00;
					write_out				<= 	1'b0;
					jump_register_out		<=    1'b1;
					jump_and_link_out		<=		1'b0;			
					shift_out				<=    1'b0;
					sign 						<= 	1'b1;
					store_byte				<=		1'b0;
					load_byte				<=		1'b0;
					if(instruction_func_in == 6'b001001)
						begin
							write_register_data_out <=	1'b1;
							reg_write_out			<=    1'b1;
							write_register_out	<=		1'b1;
						end
					else
						begin
							write_register_data_out <=	1'b0;
							reg_write_out			<=    1'b0;
							write_register_out	<=		1'b0;
						end
					end
				else begin
					reg_dest_out			<=    1'b1;
					alu_mux_out				<=    1'b0;
					mem_to_reg_out			<=    1'b0;
					reg_write_out			<=    1'b1;
					mem_read_out			<=    1'b0;
					mem_write_out			<=    1'b0;
					//branch_out				<=    1'b0;
					jump_out					<=		1'b0;
					func_in					<= 	instruction_func_in;
					size_in					<=    2'b00;
					write_out				<= 	1'b0;
					jump_register_out		<=    1'b0;
					jump_and_link_out		<=		1'b0;
					write_register_out	<=		1'b0;
					write_register_data_out <=	1'b0;
					shift_out				<=    1'b0;
					sign 						<= 	1'b1;
					store_byte				<=		1'b0;
					load_byte				<=		1'b0;
				end
			end
	
	 6'b001010: //SLTI
		begin
				reg_dest_out			<=    1'b0;
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0;
            reg_write_out			<=    1'b1;
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b101000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
		end
		
	 6'b001011: //SLTIU
		begin
				reg_dest_out			<=    1'b0;
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0;
            reg_write_out			<=    1'b1;
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b101001;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
		end
		
		
    6'b100000://    LB
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b1;
			end
			
	 6'b100001://		LH
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b01;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b1;
			end
	 6'b101000://	  SB
			begin
				reg_dest_out			<=    1'bx;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b0;
				reg_write_out			<=    1'b0;
				mem_read_out			<=    1'b0;
				mem_write_out			<=    1'b1;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b1;
				load_byte				<=		1'b0;
			end
				
	 6'b101001://	  SH
			begin
				reg_dest_out			<=    1'bx;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b0;
				reg_write_out			<=    1'b0;
				mem_read_out			<=    1'b0;
				mem_write_out			<=    1'b1;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b01;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b1;
				load_byte				<=		1'b0;
			end
		
	 6'b100100:// 	  LBU
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b1;
			end
				
	 6'b100101://    LHU
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b01;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b1;
			end
			
    6'b000100://    BEQ 
        begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b1;
				jump_out					<=		1'b0;
				func_in					<= 	6'b111100;
				size_in 					<= 	2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
	6'b000101://     BNE    
        begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b1;
				jump_out					<=		1'b0;
				func_in					<= 	6'b111101;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
	6'b000001://     BLTZ/BGEZ
        begin
				if(instruction_20_16 == 5'b00000) //BLTZ
					begin
						func_in			<= 	6'b111000;
					end
					
				else 										//BGEZ
					begin
						func_in			<= 	6'b111001;
					end
				
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b1;
				jump_out					<=		1'b0;
				
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				sign 						<= 	1'b1;
				shift_out				<=    1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
	6'b000110://     BLEZ   
        begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b1;
				jump_out					<=		1'b0;
				func_in					<= 	6'b111110;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
	6'b000111://     BGTZ    
        begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b1;
				jump_out					<=		1'b0;
				func_in					<= 	6'b111111;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end

	6'b001001://		ADDIU
			begin
				reg_dest_out			<=    1'b0; //x
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b1; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100000;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
	
	6'b001100://		ANDI
			begin
				reg_dest_out			<=    1'b0; //x
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b1; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100100;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
		  
	6'b001101://		ORI
			begin
				reg_dest_out			<=    1'b0; //x
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b1; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100101;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
			
	6'b001110://		XORI
			begin
				reg_dest_out			<=    1'b0; //x
            alu_mux_out				<=    1'b1;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b1; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b0;
				func_in					<= 	6'b100110;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b0;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
			
	6'b001111:// LUI
			begin
				reg_dest_out			<=    1'b0;
				alu_mux_out				<=    1'b1;
				mem_to_reg_out			<=    1'b1;
				reg_write_out			<=    1'b1;
				mem_read_out			<=    1'b1;
				mem_write_out			<=    1'b0;
				//branch_out				<=    1'b0;
				func_in					<= 	instruction_func_in;  
				jump_out					<=		1'b0;
				size_in  				<=    2'b11;
				write_out				<= 	1'b1;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
			end
			
	6'b000011:// JAL
			begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b1; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
           // branch_out				<=    1'b0;
				jump_out					<=		1'b1;
				func_in					<= 	6'b111010;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b1;
				write_register_out	<=		1'b1;
				write_register_data_out <=	1'b1;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
	6'b000010://     Jump    
        begin
            reg_dest_out			<=    1'b0; //x
            alu_mux_out				<=    1'b0;
            mem_to_reg_out			<=    1'b0; //x
            reg_write_out			<=    1'b0; 
            mem_read_out			<=    1'b0;
            mem_write_out			<=    1'b0;
            //branch_out				<=    1'b0;
				jump_out					<=		1'b1;
				func_in					<= 	6'b111010;
				size_in					<=    2'b00;
				write_out				<= 	1'b0;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'b0;
				write_register_data_out <=	1'b0;
				shift_out				<=    1'b0;
				sign 						<= 	1'b1;
				store_byte				<=		1'b0;
				load_byte				<=		1'b0;
        end
		  
    default:
        begin
            reg_dest_out			<=    1'bx; //x
            alu_mux_out				<=    1'bx; //x
            mem_to_reg_out			<=    1'bx; //x
            reg_write_out			<=    1'bx; //x 
            mem_read_out			<=    1'bx; //x
            mem_write_out			<=    1'bx; //x
            //branch_out				<=    1'bx; //x
				jump_out					<=		1'bx;
				func_in					<= 	6'bxxxxxx;
				size_in					<=    2'bxx;
				write_out				<= 	1'bx;
				jump_register_out		<=    1'b0;
				jump_and_link_out		<=		1'b0;
				write_register_out	<=		1'bx;
				write_register_data_out <=	1'bx;
				shift_out				<=    1'bx;	
				sign 						<= 	1'bx;
				store_byte				<=		1'bx;
				load_byte				<=		1'bx;
        end    
       
    endcase
end
endmodule
